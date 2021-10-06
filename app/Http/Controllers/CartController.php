<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        if($id == (int)$id)
        {
            $product = Product::where('product_id',$id)->first();
            if($product != null){
                $oldCart = Session('Cart')?Session('Cart'):null;
                $newCart = new Cart($oldCart);
                $newCart->addCart($product,$id);
                $request->session()->put('Cart',$newCart);
            }
            return response()->json([
                ['products'=>Session('Cart')->products,
            'totalQuantity'=>Session('Cart')->totalQuantity,
            'totalPrice'=>Session('Cart')->totalPrice,
            'success'=>'Thêm mới thành công',
            'class'=>'alert alert-success']
            ]);
        }
    }
}
