<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Order;
use App\OrderItem;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = session('cart');
        // session::flush();
        return view('cart.index')->with('item',$item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required'
        ]);

        $order = new Order();

        $items = session('cart');


        $order->user_name = $request->user_name;
        $order->email = $request->email;
        $order->phoneNumber = $request->phoneNumber;
        $order->status = "pending";
        // $order->items = session('cart');
        $order->save();
        foreach ($items as $item) {
            $order_item = new OrderItem();
            $order_item->order_id = $order->id;
            $order_item->product_id =$item['id'];
            $order_item->quantity =$item['qty'];
            $order_item->save();
        }

        session::flush();
        $item = session('cart');
        return redirect('/cart')->with('item',$item)->with('success','Order Placed');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->session()->put('cart', $name);
        $cart_details = ['qty'=> $request->qty , 'id'=> $request->id];
        session::put('cart.'.$request->name,$cart_details);
       // session::push('cart.'.$request->name, $request->id);
        // session::push('cart.qty', $request->qty);
        $name = session('cart');
        return redirect('/products')->with('success', 'Item Added to cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $item = $request->key;
        session()->forget('cart.'.$item);
        $item = session('cart');
        return redirect('/cart')->with('item',$item);
    }
}
