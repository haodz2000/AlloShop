<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\ProductDetail;
use App\Model\Size;
use App\Model\Color;

class ProductDetailController extends Controller
{
    //
    public function index($id){
        $product = Product::where('product_id',$id)->first();
        $imageProduct = json_decode($product->url_image);
        $size = Size::all();
        $color = Color::all();
        $productItem = $product->product_details;
        return view('admin.pages.eCommerce.add-product-detail',[
            'product'=>$product,
            'image'=>$imageProduct,
            'size' =>$size,
            'color'=>$color,
            'listItem'=>$productItem
        ]);
    }
    public function store(Request $request){

        $item = ProductDetail::where('product_id',$request->id)->where('size_id',$request->size)
        ->where('color_id',$request->color)->first();
        if($item){
            ProductDetail::where('product_id',$request->id)->where('size_id',$request->size)
            ->where('color_id',$request->color)->update(['quantity'=>$item->quantity + $request->quantity]);
            $item->status = 'old';
        }
        else
        {
            $item = new ProductDetail();
            $item->product_id = $request->id;
            $item->size_id = $request->size;
            $item->color_id = $request->color;
            $item->quantity = $request->quantity;
            $item->sku = '#'.$request->id.$request->size.$request->color;
            $item->save();
            $item->status = 'new';
        }
        $item->color = $item->colors->color;
        $item->size = $item->sizes->size;
        $listItem = ProductDetail::all();
        return response()->json([
            'item' => $item,
            'listItem' => $listItem
        ]);
    }
    public function delete(Request $request){
        $sku = $request->sku;
        ProductDetail::where('sku',$sku)->delete();
    }
}
