<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Product;
use App\Model\RatingProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class RatingController extends Controller
{
    //
    public function rating(Request $request){
        $data = $request->all();
        $idUser = Auth::id();
        $idProduct = $data['idProduct'];
        $idOrder = $data['idOrder'];
        $order = Order::where('order_id',$idOrder)->where('user_id',$idUser)->first();
        $sku = $data['sku'];
        if($order)
        {
            if(isset($data['star'])){
                $rating = new RatingProduct();
                $rating->product_id = $data['idProduct'];
                $rating->user_id = $idUser;
                $rating->vote = $data['star'];
                if($data['comment']){
                    $rating->comment = $data['comment'];
                }
                else{
                    $rating->comment = 'Good Product';
                }
                $rating->save();
                try {
                    //code...
                    OrderDetail::where('order_id',$idOrder)->where('product_id',$idProduct)->where('sku',$sku)->update(['status' => 1]);
                } catch (\Throwable $th) {
                    //throw $th;
                    return response()->json(0);
                }
                $this->finishOrder($idOrder);
                return response()->json(1);
            }
            else{
                return 0;
            }
        }
        else{

            return response()->json(1);
        }
    }
    public function finishOrder($id){
        $order = Order::where('order_id',$id)->first();
        $flag = 0;
        $detail = $order->order_details;
        foreach($detail as $value){
            if($value->status == 1){
                $flag +=1;
            }
        }
        if($flag == count($detail))
        {
            $order->status = 3;
            $order->save();
        }
    }
}
