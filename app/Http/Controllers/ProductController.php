<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\ProductDetail;
use App\Model\Color;
use App\Model\Size;
use App\Model\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product_detail(Request $request,$slug){
        $product  = Product::where('slug',$slug)->get()->first();
        $productDetail = $product->product_details;
        return view('client.pages.products.product-detail',[
            'product'=>$product,
            'productDetail'=>$productDetail
        ]);
    }
    public function getInfoProduct(Request $request)
    {
        $data = $request->all();
        $product = ProductDetail::where('product_id',$data['product_id'])
        ->where('color_id',$data['color'])->where('size_id',$data['size'])
        ->get()->first();
        return response()->json([
            'product'=>$product
        ]);
    }
}
