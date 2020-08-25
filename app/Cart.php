<?php

namespace App;

use App\Product;

class Cart
{
    public $items = null;
    public $totalQty = 0; 
    public $totalPrice = 0;

    public function __contructor(Cart $oldCart)
    {
    	if($oldCart != null)
    	{
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add(Product $product, int $number)
    {

    	$storedItems = ($this->item != null && 
    					array_key_exists($product->id, $this->items)) ? 
    					$this->items[$product->id] : [
    								'qty' => 0, 
						    		'price' => 0, 
						    		'product' => $product
    						];
    	$storedItems['qty'] += number;
    	$storedItems['price'] += ($product->price * number);
    	$this->items[$product->id] = $storedItems;
    	$this->totalQty += number;
    	$this->totalPrice += ($product->price * number);
    }

    public function remove(Product $product)
    {
    	if(array_key_exists($product->id, $this->items))
    	{
    		$stoerdItem = $this->items[$product->id];
    		$this->totalQty -= $stoerdItem['qty'];
    		$this->totalPrice -= $stoerdItem['qty'] * $stoerdItem['price'];
    		unset($this->items[$product->id]);
    	}
    }
}
