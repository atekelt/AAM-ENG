<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Session;

class CartController extends Controller
{
	public function index()
	{
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		if($oldCart != null) return 'You dont have anything in your cart, dummy!';
		$newCart = new Cart($oldCart);
		dd($newCart);
	}
    public function addProductToCart(Product $product, $number)
    {
    	$number = intval($number);
    	$newCart = new Cart(Session::has('cart') ? Session::get('cart') : null);
        $newCart->add($product, $number);
        Session::put('cart', $cart);
        // dd($cart);
        return $newCart;
    }

    public function removeProductFromCart(Product $product)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if($oldCart === null) return;
        $newCart = new Cart($oldCart);
        $newCart->remove($product);
        Session::put('cart', $newCart);
        return $newCart;
    }
}
