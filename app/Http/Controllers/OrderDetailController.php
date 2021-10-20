<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    public function index(){
        return view('admin.pages.order.order-details');
    }

    public function show($order_id, $customer_id){
        $order_details = DB::table('order_details')
                            ->join('products', 'order_details.product_id', '=', 'products.product_id')
                            ->select('order_details.*', 'products.product_name as product_name', 'products.url_image as product_image')
                            ->where('order_details.order_id', '=', $order_id)
                            ->get();
        $customers = DB::table('customers')->select('customers.name', 'customers.phone', 'customers.email')
                            ->where('customers.customer_id', '=', $customer_id)->get();
        // dd($customers);  
        return view('admin.pages.order.order-details', [
            'order_details' => $order_details,
            'customers' => $customers
        ]);
    }
}
