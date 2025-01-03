<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartshow(Request $Request, $id = null )
    {
        $cart = Session::get('cart', []);
   
       
        return view('auth.productcart', compact('cart', 'id'));
    }

    public function addtocart($id)
{
    $cart = Session::get('cart', []);
    $product = Products::findOrFail($id);

    if (isset($cart[$id])) {
        $cart[$id]['item_stock_quantity']++;
    } else {
        $cart[$id] = [
            'item_product_name' => $product->name,
            'item_description' => $product->description,
            'item_price' => $product->price,
            'item_stock_quantity' => 1,
            'message'  => 'Product Upadted Successfully !'
        ];
    }

    Session::put('cart', $cart);

  return redirect()->route('after.cart')->with('success', 'Product added to cart successfully.')->with('product', $product);

}
}
