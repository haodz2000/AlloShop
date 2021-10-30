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
                    $productDetail->quantity -= $product['quantity'];
                    $productDetail->save();
                    $products = $productDetail->products;
                    $products->quantity_orderd += $product['quantity'];
                    $products->save();
                }
                $customer = Auth::user();
                $this->mailOrderClient($customer,$order);
                $this->email = $customer->email;
                $data = array('cart'=>Session('Cart'),'customer'=>$customer,'token'=>$order->key_token);
                SendEmailClientOrderProduct::dispatch($this->email,$data);
                $data = array('cart'=>Session('Cart'),'order'=>$order);
                SendEmailAdminOrderProduct::dispatch($data)->delay(now()->addSecond(5));
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
        $order = Order::where('user_id',Auth::id())->orderBy('updated_at')->get();
        $orderTrans = null;
        $orderCancel = null;
        foreach($order as $value){
            $i = 0;
            if($value->status == 1)
            {
                $orderTrans[$i] = $value;
            }
            else if($value->status == 3){
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
}
