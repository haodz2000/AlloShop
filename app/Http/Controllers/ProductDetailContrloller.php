<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailContrloller extends Controller
{
    public function productList(){
        $product_list =  DB::table('product_details')
                            ->join('products', 'product_details.product_id', '=', 'products.product_id')
                            ->join('colors', 'product_details.color_id', '=', 'colors.color_id')
                            ->join('sizes', 'product_details.size_id', '=', 'sizes.size_id')
                            ->select('product_details.*', 'products.product_name', 'products.url_image', 'products.price', 'colors.color', 'sizes.size')
                            ->get();
        // dd($product_list);
        return view("admin.pages.eCommerce.products-list", [
                'product_list' => $product_list,
            ]);
        // return view("admin.pages.eCommerce.products-grid", [
        //         'product_grid' => $product_list,
        //     ]);
    }
}
