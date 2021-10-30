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
        $newProduct = Product::orderBy('product_id')->take(8)->get();
        $listProduct = Product::paginate(8);
        $bestSellerProduct = Product::orderBy('quantity_orderd')->where('quantity_orderd','>',0)->take(8)->get();
        return view('client.pages.home',[
            'newProducts'=>$newProduct,
            'listProducts'=>$listProduct,
            'bestSellerProduct'=> $bestSellerProduct,
            ]
        );
    }
    public function men(){
        $listProduct = Product::where('gender',1)->paginate(20);
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
}
