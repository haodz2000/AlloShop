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
    public function addCart($product,$sku,$color ='Trắng',$size = 'S',$quantity = 1)
    {
        $newProduct = [
            'sku'=>$sku,
            'quantity'=>0 ,'price'=>$product->price,
            'color'=>$color,'size'=>$size,
            'productInfo'=>$product
        ];
        if($this->products)
        {
            if(array_key_exists($sku,$this->products) )
            {
                $newProduct = $this->products[$sku];
            }
        }
        $newProduct['quantity'] += $quantity;
        $newProduct['price'] = $newProduct['quantity']*$product->price;
        $this->products[$sku] = $newProduct;
        $this->totalQuantity += $quantity;
        $this->totalPrice += $product->price*$quantity;
    }
    public function deleteItem($sku)
    {
        if(array_key_exists($sku,$this->products)){
            $this->totalPrice -= $this->products[$sku]['price'];
            $this->totalQuantity -= $this->products[$sku]['quantity'];
            unset($this->products[$sku]);
        }
        
    }
}
