<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    public function index(){
        return view('admin.pages.order.order-details');
    }

    public function show($order_id, $customer_id, $shipper_id){
        $order_details = DB::table('order_details')
                            ->join('products', 'order_details.product_id', '=', 'products.product_id')
                            ->select('order_details.*', 'products.product_name as product_name', 'products.url_image as product_image')
                            ->where('order_details.order_id', '=', $order_id)
                            ->get();
        $customers = DB::table('users')->select('users.name', 'users.phone', 'users.email')
                            ->where('users.user_id', '=', $customer_id)->get();
        $shipper = DB::table('shippers')->select('shippers.name', 'shippers.phone', 'shippers.address')
                            ->where('shippers.shipper_id', '=', $shipper_id)
                            ->get();
        $orders = DB::table('orders')->select('orders.*')
                            ->where('orders.order_id', '=', $order_id)
                            ->get();
        // dd($customers);
        return view('admin.pages.order.order-details', [
            'order_details' => $order_details,
            'customers' => $customers,
            'shippers' => $shipper,
            'orders' => $orders
        ]);
    }

    public function changeStatus($order_id, Request $request){
       
    }
}
