<?php

namespace App\Http\Controllers;

use App\Model\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        return view('admin.pages.order.orders');
    }

    public function show(){
        $order_list = DB::table('orders')
                        ->join('order_details', 'orders.order_id', '=', 'order_details.order_id')
                        ->join('users', 'orders.user_id', '=', 'users.user_id')
                        ->join('shippers', 'orders.shipper_id', '=', 'shippers.shipper_id')
                        ->select('orders.*', 'order_details.total_price as total_price', 'users.user_id', 'users.name as user_name', 'shippers.shipper_id as shipper_id')
                        ->get();
        // dd($order_list);
        return view('admin.pages.order.orders', [
            'order_list' => $order_list
        ]);
    }
}
