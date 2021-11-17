<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\Model\Order;
use App\User;
use App\Model\OrderDetail;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        $this_month = date('m');
        $this_year = date('Y');

        if ($this_month == 1) {
            $last_month = 12;
            $last_year = $this_year-1;
        } else {
            $last_month = $this_month-1;
            $last_year = $this_year;
        }

        $list_order_in_this_month = Order::where('created_at','like',$this_year.'-'.$this_month.'%')->get();
        $list_order_detail_in_this_month = OrderDetail::where('created_at','like',$this_year.'-'.$this_month.'%')->get();
        $list_order_complete_in_this_month = Order::where('status','=',3)->where('created_at','like',$this_year.'-'.$this_month.'%')->get();
        $list_order_cancel_in_this_month = Order::where('status','=',4)->where('created_at','like',$this_year.'-'.$this_month.'%')->get();   
        
        $list_order_in_last_month = Order::where('created_at','like',$last_year.'-'.$last_month.'%')->get();
        $list_order_detail_in_last_month = OrderDetail::where('created_at','like',$last_year.'-'.$last_month.'%')->get();
        $list_order_complete_in_last_month = Order::where('status','=',3)->where('created_at','like',$last_year.'-'.$last_month.'%')->get();
        $list_order_cancel_in_last_month = Order::where('status','=',4)->where('created_at','like',$last_year.'-'.$last_month.'%')->get(); 
        
        $list_product = Product::get();
        $list_category = Category::get();
        $list_account_customer = User::where('level','=',1)->get();
        $list_account_admin = User::where('level','=',3)->get();

        $total_order_in_this_month = count($list_order_in_this_month);
        $total_order_complete_in_this_month = count($list_order_complete_in_this_month);
        $total_order_cancel_in_this_month = count($list_order_cancel_in_this_month);

        $total_order_in_last_month = count($list_order_in_last_month);
        $total_order_complete_in_last_month = count($list_order_complete_in_last_month);
        $total_order_cancel_in_last_month = count($list_order_cancel_in_last_month);

        $total_product = count($list_product);
        $total_category = count($list_category);
        $total_account_customer = count($list_account_customer);
        $total_account_admin = count($list_account_admin);

        $total_price_in_this_month = 0;
        foreach($list_order_detail_in_this_month as $item_order_detail) {
            foreach($list_order_in_this_month as $item_order) {
                if($item_order_detail['order_id'] == $item_order['order_id'] && $item_order['status'] == '3') {                           
                    $total_price_in_this_month += $item_order_detail['total_price'];                             
                }
            }
        }

        $total_price_in_last_month = 0;
        foreach($list_order_detail_in_last_month as $item_order_detail) {
            foreach($list_order_in_last_month as $item_order) {
                if($item_order_detail['order_id'] == $item_order['order_id'] && $item_order['status'] == '3') {                           
                    $total_price_in_last_month += $item_order_detail['total_price'];                             
                }
            }
        }

        return view('admin.pages.dashboard.dashboard',compact([
            'total_order_in_this_month',
            'total_order_complete_in_this_month',
            'total_order_cancel_in_this_month',
            'total_price_in_this_month',
            'total_order_in_last_month',
            'total_order_complete_in_last_month',
            'total_order_cancel_in_last_month',
            'total_price_in_last_month',
            'total_product',
            'total_category',
            'total_account_customer',
            'total_account_admin'
        ]));
    }
}
