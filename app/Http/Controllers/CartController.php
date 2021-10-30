<?php

namespace App\Http\Controllers;
use App\Model\Product;
use App\Model\Cart;
use App\Model\ProductDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Model\Shipper;

class CartController extends Controller
{
    //
    public function index(){
        $shippers = Shipper::all();
        return view('client.pages.shopping.cart-detail',[
            'shippers'=>$shippers
        ]);
    }
    public function store(Request $request, $id)
    {
        $validation = Validator::make($request->all(),[
            'quantity'=> 'required',
            'size' => 'required',
            'color'=> 'required',
            'sku' => 'required'
        ]);
        if($validation->passes()){
             $data = $request->all();
             $productDetail = ProductDetail::where('sku',$data['sku'])->get()->first();
             if($productDetail)
             {
                $product = $productDetail->products;
                $size = $productDetail->sizes->size;
                $color = $productDetail->colors->color;
                $sku = $productDetail->sku;
               if($sku)
               {
                   if($product != null){
                       $oldCart = Session('Cart')?Session('Cart'):null;
                       $newCart = new Cart($oldCart);
                       $newCart->addCart($product,$sku,$color,$size,$data['quantity']);
                       $request->session()->put('Cart',$newCart);
                   }
                   return response()->json([
                        'products'=>Session('Cart')->products,
                        'totalQuantity'=>Session('Cart')->totalQuantity,
                        'totalPrice'=>Session('Cart')->totalPrice,
                        'success'=>'Thêm mới thành công',
                        'class'=>'alert alert-success'
                   ]);
               }
             }
        }

    }
    public function update(Request $request){
        $data = $request->all();
        $quantiy = $data['quantity'];
        $sku = $data['sku'];
        $oldCart = Session('Cart')?Session('Cart'):null;
        $newCart = new Cart($oldCart);
        if($sku != null)
        {
            $newCart->updateCart($sku,$quantiy);
            $request->session()->put('Cart',$newCart);
            return response()->json([
                'products'=>$newCart->products,
                'totalQuantity'=>$newCart->totalQuantity,
                'totalPrice'=>$newCart->totalPrice,
                'success'=>'Update Success',
                'class'=>'alert alert-success'
           ]);
        }
    }
    public function delete(Request $request){
        $data = $request->all();
        $sku = $data['sku'];
        $oldCart = Session('Cart')?Session('Cart'):null;
        $newCart = new Cart($oldCart);
        if($sku != null){
            $newCart->deleteItem($sku);
            if(count($newCart->products) >0){
                $request->session()->put('Cart',$newCart);
            }
            else{
                $request->session()->forget('Cart');
            }
            return response()->json([
                'products'=>$newCart->products,
                'totalQuantity'=>$newCart->totalQuantity,
                'totalPrice'=>$newCart->totalPrice,
                'success'=>'Delete Success',
                'class'=>'alert alert-success'
           ]);
        }
    }
    public function getProduct(Request $request){
        $id = (int)$request->id;
        if($id != null){
            $product = Product::where('product_id',$id)->get()->first();
            $productDetail = $product->product_details;
            $size = null;
            $color = null;
            $quantiyStock = 0;
            foreach($productDetail as $value)
            {
                $quantiyStock += $value->quantity;
                $idColor = $value->color_id;
                $idSize = $value->size_id;
                $size[$idSize] = $value->sizes;
                $color[$idColor] = $value->colors;
            }
            return response()->json([
                'product'=> $product,
                'size' => $size,
                'color'=> $color,
                'quantityStock' => $quantiyStock
            ]);
        }
    }
    public function storeItem(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'quantity'=> 'required',
            'size' => 'required',
            'color'=> 'required',
            'sku' => 'required'
        ]);
        if($validation->passes()){
             $data = $request->all();
             $productDetail = ProductDetail::where('sku',$data['sku'])->get()->first();
             if($productDetail)
             {
                $product = $productDetail->products;
                $size = $productDetail->sizes->size;
                $color = $productDetail->colors->color;
                $sku = $productDetail->sku;
               if($sku)
               {
                   if($product != null){
                       $oldCart = Session('Cart')?Session('Cart'):null;
                       $newCart = new Cart($oldCart);
                       $newCart->addCart($product,$sku,$color,$size,$data['quantity']);
                       $request->session()->put('Cart',$newCart);
                   }
                  return redirect()->route('shipping');
               }
             }
             else{
                 return callback('No found Data');
             }
        }

    }
}
