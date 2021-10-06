<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $newProduct = Product::orderBy('product_id')->take(8)->get();
        $listProduct = Product::paginate(8);
        return view('client.pages.home',[
            'newProducts'=>$newProduct,
            'listProducts'=>$listProduct
        ]);
    }

}
