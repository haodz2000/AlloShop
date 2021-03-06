<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\ProductDetail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Jobs\SendEmailClientOrderProduct;
use App\Jobs\SendEmailAdminOrderProduct;
use App\Model\Cart;
use Illuminate\Support\Arr;

class OrderController extends Controller
{
    //
    public function order(Request $request){{
        if(Auth::check())
            {
                $data = $request->all();
                $order = new Order();
                $order->user_id = Auth::id();
                $order->shipper_id =  $data['shipper'];
                if($data['infomation'] == 'old')
                {
                    $order->address = Auth::user()->address;
                }
                else if($data['infomation'] == 'new'){
                    $city = $this->getString($data['city']);
                    $district = $this->getString($data['district']);
                    $ward = $data['ward'];
                    if($data['address'] != '')
                    {
                        $address = $data['address'].' '.$ward.' '.$district.' '. $city;
                        $order->address = $address;
                    }
                    else{
                        $order->address = Auth::user()->address;
                    }
                }
                if($data['note'] != ''){
                    $order->note = $data['note'];
                }
                else{
                    $order->note = 'null';
                }
                $order->key_token = $this->getToken(10);
                $order->code_employee = '';
                $order->save();

                $Cart = Session('Cart');
                foreach($Cart->products as $product)
                {
                    $orderDetail = new OrderDetail();
                    $orderDetail->order_id = $order->order_id;
                    $orderDetail->product_id = $product['productInfo']->product_id;
                    $orderDetail->price = $product['productInfo']->price;
                    $orderDetail->quantity = $product['quantity'];
                    $orderDetail->size = $product['size'];
                    $orderDetail->color = $product['color'];
                    $orderDetail->total_price = $product['price'];
                    $orderDetail->sku = $product['sku'];
                    $orderDetail->save();
                    $productDetail = ProductDetail::where('sku',$product['sku'])->first();
                    $quantity = $productDetail->quantity - $product['quantity'];
                    ProductDetail::where('sku',$product['sku'])->update(['quantity'=>$quantity]);
                    $products = Product::where('product_id',$product['productInfo']->product_id)->get()->first();
                    $products->quantity_orderd += $product['quantity'];
                    $products->save();
                }
                $customer = Auth::user();
                $this->mailOrderClient($customer,$order);
                $this->mailOrderAdmin($order);
                $request->session()->forget('Cart');
                return redirect()->route('shipping.order');
            }

        }


    }

    public function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->crypto_rand_secure(0, $max-1)];
        }
        return $token;
    }
    public function mailOrderClient($customer,$order) {
        $this->email = $customer->email;
        $data = array('cart'=>Session('Cart'),'customer'=>$customer,'token'=>$order->key_token);
        SendEmailClientOrderProduct::dispatch($this->email,$data);
    }

    public function mailOrderAdmin($order){
        $data = array('cart'=>Session('Cart'),'order'=>$order);
        SendEmailAdminOrderProduct::dispatch($data)->delay(now()->addMinutes(1));
    }
    public function listOrderedClient(){
        $order = Order::where('user_id',Auth::id())->orderBy('updated_at','DESC')->get();
        $orderTrans = null;
        $orderCancel = null;
        foreach($order as $value){
            $i = 0;
            if($value->status == 1)
            {
                $orderTrans[$i] = $value;
            }
            else if($value->status == 4){
                $orderCancel[$i] = $value;
            }
        }
        // $orderTrans = Order::where('user_id',Auth::id())->where('status',1)->orderBy('updated_at')->get();
        // $orderCancel = Order::where('user_id',Auth::id())->where('status',3)->orderBy('updated_at')->get();
        return view('client.pages.shopping.order',[
            'order'=>$order,
            'orderTrans'=>$orderTrans,
            'orderCancel'=>$orderCancel
        ]);
    }
    public function getString($string){
        $array = explode('/',$string);
        return $array[1];
    }
    public function getOrderDetail(Request $request){
        $idOrder = (int)$request['id'];
        if($idOrder != null)
        {
            $userId = Auth::id();
            $order = Order::where('order_id',$idOrder)->where('user_id',$userId)->first();
            $order['totalQuantity'] = 0;
            $order['totalPrice'] = 0;
            $order['shipper'] = $order->shippers->name;
            $customer = Auth::user();
            $orderDetail = OrderDetail::where('order_id',$idOrder)->get();
            $product = null;
            foreach($orderDetail as $key=>$value)
            {
                $order['totalQuantity'] += $value->quantity;
                $order['totalPrice'] += $value->total_price;
                $product[$key] = $value->products;
                $product[$key]['quantiyOrder'] = $value->quantity;
                $product[$key]['size'] = $value->size;
                $product[$key]['color'] = $value->color;
                $product[$key]['totalPrice'] = $value->total_price;
                $product[$key]['rated'] = $value->status;
                $product[$key]['sku'] = $value->sku;
            }
            if($order)
            {
                return response()->json([
                    'order'=> $order,
                    'customer'=>$customer,
                    'product' => $product
                ]);
            }
            else{
                return 0;
            }
        }
        else{
            return 0;
        }

    }
    public function cancelOrder(Request $request){
        $idOrder = (int)$request['id'];
        if($idOrder != null){
            $idCustomer = Auth::id();
            $order = Order::where('order_id',$idOrder)->where('user_id',$idCustomer)->get()->first();
            $order->status = 4;
            $order->save();
            $order['shipper'] = $order->shippers->name;
            return response()->json(['order'=>$order]);
        }
    }
}
