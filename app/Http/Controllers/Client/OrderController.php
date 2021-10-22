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
class OrderController extends Controller
{
    //
    public function order(Request $request){
        $validation = Validator::make($request->all(),[
            'infomation'=>'required',
            'address' =>'required',
            'shipper'=>'required'
        ]);
        if($validation->passes())
        {
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
                    $order->address = $data['address'];
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
        Mail::send('.client.pages.mails.mail-order-client', $data, function($message) {
            $message->to($this->email, 'AlloShop')->subject
            ('Thanh You');
            $message->from('tahuuhao1810@gmail.com','Allshop');
        });
    }

    public function mailOrderAdmin($order){
        $data = array('cart'=>Session('Cart'),'order'=>$order);
        Mail::send('.client.pages.mails.mail-order-admin', $data, function($message) {
            $message->to('tahuuhao1810@gmail.com', 'AlloShop')->subject
            ('Thanh You');
            $message->from('tahuuhao1810@gmail.com','Allshop');
        });
    }
    public function listOrderedClient(){
        $order = Order::where('user_id',Auth::id())->get();
        return view('client.pages.shopping.order',[
            'order'=>$order
        ]);
    }
}
