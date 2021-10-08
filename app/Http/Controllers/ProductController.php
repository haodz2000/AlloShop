<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function product_list_add(){
        // $gender_list = Product::select('gender')->get();
        $category_name_list = Category::select('category_name', 'category_id')->get();
        return view("admin.pages.eCommerce.add-new-product", [
            // 'gender_list' => $gender_list,
            'category_name_list' => $category_name_list,
        ]);
    }
    public function add_new_product(Request $request){
        $data = $request->except('_token');
        // $data = $request->input('url_image');
        $photo = $request->file('url_image')->getClientOriginalName();
        $destination = base_path() . '/public/assets/admin/images';
        $request->file('url_image')->move($destination, $photo);
        // dd($data);
        return redirect()->route('add-new-product');
    }
}
