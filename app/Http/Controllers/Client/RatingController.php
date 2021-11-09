<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
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
        $idOrder = $data['idOrder'];
        $order = Order::where('order_id',$idOrder)->where('user_id',$idUser)->first();
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
                $order->status = 3;
                $order->save();
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
}
