<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $totalQuantity = 0;
    public $totalPrice = 0;
    public $products = null;
    public function __construct($cart)
    {
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }
    public function addCart($product,$id)
    {
        $newProduct = [
            'quantity'=>0 ,'price'=>$product->price,
            'color'=>'Đen','size'=>'S',
            'productInfo'=>$product
        ];
        if($this->products)
        {
            if(array_key_exists($id,$this->products))
            {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity']*$product->price;
        $this->products[$id] = $newProduct;
        $this->totalQuantity++;
        $this->totalPrice += $product->price;
    }
}
