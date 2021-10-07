<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_list(){
        $product_list =  Product::select('product_id', 'product_name', 'url_image', 'price')->get();
        return view("admin.pages.eCommerce.products-list", [
            'product_list' => $product_list,
        ]);
        return view("admin.pages.eCommerce.products-grid", [
            'product_grid' => $product_list,
        ]);
    }
    public function product_grid(){
        $product_list =  Product::select('product_id', 'product_name', 'url_image', 'price')->get();
        return view("admin.pages.eCommerce.products-grid", [
            'product_grid' => $product_list,
        ]);
    }
    public function delete_product_grid($id)
    {
        $delete = Product::find($id)->delete();
        return redirect()->route('products-grid');
    }
}
