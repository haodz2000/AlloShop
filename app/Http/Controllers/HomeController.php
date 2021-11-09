<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Model\Category;
use App\Model\Product;

use App\Model\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $newProduct = Product::orderBy('product_id')->orderBy('created_at')->take(8)->get();
        $hotProduct = Product::orderBy('updated_at','DESC')->orWhere('quantity_orderd','DESC')->take(4)->get();
        $bestSellerProduct = Product::orderBy('quantity_orderd','DESC')->where('quantity_orderd','>',0)->take(4)->get();
        return view('client.pages.home',[
            'newProducts'=>$newProduct,
            'hotProduct'=>$hotProduct,
            'bestSellerProduct'=> $bestSellerProduct,
            ]
        );
    }
    public function men(){
        $listProduct = Product::where('gender',1)->paginate(18);
        return view('client.pages.products.men-clothes',[
            'listProduct'=>$listProduct
        ]);
    }
    public function women(){
        $womenProduct = Product::where('gender',2)->paginate(20);
        return view('client.pages.products.men-clothes',[
            'listProduct'=>$womenProduct
        ]);
    }
    public function unisex(){
        $unisexClothes = Product::where('gender',3)->paginate(20);
        return view('client.pages.products.unisex-clothes',[
            'listProduct'=>$unisexClothes
        ]);
    }
    public function allProduct(){
        $allProduct = Product::orderBy('created_at')->paginate(20);
        return view('client.pages.products.all-products',[
            'listProduct'=>$allProduct
        ]);
    }
}
