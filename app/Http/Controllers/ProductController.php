<?php

namespace App\Http\Controllers;
use App\Model\ProductDetail;
use App\Model\Category;
use App\Model\Product;
// use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function productList(){
        $product_list =  Product::select('product_id', 'product_name', 'url_image', 'price', 'gender', 'slug')->paginate(5);
                        
        return view("admin.pages.eCommerce.products-list", [
                'product_list' => $product_list,
            ]);
        // return view("admin.pages.eCommerce.products-grid", [
        //         'product_grid' => $product_list,
        //     ]);
    }

    public function productDetail(Request $request,$slug){
        $product  = Product::where('slug',$slug)->get()->first();
        $productDetail = $product->product_details;
        $size = null;
        $color =null;
        $totalQuantity = 0;
        foreach($productDetail as $value){
            $totalQuantity += $value->quantity;
            $idSize = $value->size_id;
            $idColor = $value->color_id;
            $size[$idSize] = $value->sizes;
            $color[$idColor] = $value->colors;
        }
        return view('client.pages.products.product-detail',[
            'product'=>$product,
            'productDetail'=>$productDetail,
            'size'=> $size,
            'color' => $color,
            'totalQuantity'=>$totalQuantity
        ]);
    }
    public function getInfoProduct(Request $request)
    {
        $data = $request->all();
        if(isset($data['product_id']))
        {
            $product = ProductDetail::where('product_id',$data['product_id'])
            ->where('color_id',$data['color'])->where('size_id',$data['size'])
            ->get()->first();
            if($product)
            {
                return response()->json([
                    'product'=>$product
                ]);
            }
            else{
                return 0;
            }
        }
        else{
            return 0;
        }



    }
    // public function productGrid(){
    //     $product_list =  Product::select('product_id', 'product_name', 'url_image', 'price')->paginate(5);
    //     return view("admin.pages.eCommerce.products-grid", [
    //         'product_grid' => $product_list,
    //     ]);
    // }
    public function destroyProductGrid($id)
    {
        $delete = Product::find($id)->delete();
        return redirect()->route('products-grid');
    }
    public function destroyProductList($id)
    {
        $delete = Product::find($id)->delete();
        return redirect()->route('products-list');
    }
    public function listCategory(){
        // $gender_list = Product::select('gender')->get();
        $category_name_list = Category::select('category_name', 'category_id')->get();
        return view("admin.pages.eCommerce.add-new-product", [
            // 'gender_list' => $gender_list,
            'category_name_list' => $category_name_list,
        ]);
    }
    public function addProduct(Request $request){
        // dd($request->all());

        if ($request->has('add')) {
            $product_name = $request->input('product_name');
            $slug = $request->input('slug');
            $category_id = $request->input('category_id');
            $gender = $request->input('gender');
            $price = $request->input('price');
            $discount = $request->input('discount');
            $description = $request->input('description');
            // $data = $request->except('_token', 'add');
            $data = $request->input('url_image');
            $photo = $request->file('url_image')->getClientOriginalName();

            $destination = base_path() . '/public/assets/admin/images/products';
            $request->file('url_image')->move($destination, $photo); // Xử lý để lưu ảnh
            // dd($data);
            // $create = Product::create($data);
            Product::create([
                'product_name' => $product_name,
                'slug' => $slug,
                'category_id' => $category_id,
                'gender' => $gender,
                'price' => $price,
                'discount' => $discount,
                'url_image' => $photo,
                'description' => $description
            ]);
            return redirect()->route('products-list')->with('noti', 'Add successfull');
        }
        return redirect()->route('products-list');
    }
    public function updateView($id){
        $product = Product::find($id);
        $category_name_list = Category::select('category_name', 'category_id')->get();
        return view('admin.pages.eCommerce.update-product', [
            'product' => $product,
            'category' => $category_name_list,
        ]);
    }
    public function updateProduct(Request $request, $id){
        if ($request->has('update')) {
            // $data = $request->except('_token', 'update');
            // dd($product->product_name);
            $product_name = $request->input('product_name');
            $slug = $request->input('slug');
            $category_id = $request->input('category_id');
            $gender = $request->input('gender');
            $price = $request->input('price');
            $discount = $request->input('discount');
            $description = $request->input('description');
            $product = Product::find($id);
            $product->product_name = $product_name;
            $product->slug = $slug;
            $product->category_id = $category_id;
            $product->gender = $gender;
            $product->price = $price;
            $product->discount = $discount;
            if ($request->has('url_image')) {
                $image_path = public_path("/assets/admin/images/products/".$product->url_image);
                File::delete($image_path);
                $data = $request->input('url_image');
                $photo = $request->file('url_image')->getClientOriginalName();
                $destination = base_path() . '/public/assets/admin/images/products';
                $request->file('url_image')->move($destination, $photo); // Xử lý để lưu ảnh
                $product->url_image = $photo;
            };
            $product->description = $description;
            // dd($product);
            $product->save();
            return redirect()->route('products-list')->with('noti', 'Add successfull');
        }
        return redirect()->route('products-list');
    }
}
