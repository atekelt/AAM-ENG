<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orderitem;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\auth::guest())
        {
            return redirect('/login');
        }
        else
        {
            $orders = Order::orderBy('created_at','desc')->where('status','pending')->get();
            $orderd_items = Orderitem::all();
        return view ('admin.order')-> with('orders', $orders)->with('orderd_items', $orderd_items);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $orderd_items = Orderitem::where('order_id' , '=', $request->order_id)->first();
        $items = Orderitem::select('id')->where('order_id', $request->order_id)->get();
        $ordered_items = Orderitem::find($items);
        foreach($ordered_items as $items)
        {
            $product[] = Product::select('name')->where('id',$items->product_id)->get();
        }
        return view('admin.detail')-> with('ordered_items' , $ordered_items)->with('product', $product)
                                   -> with('order_id', $request->order_id)
                                   -> with('user_name', $request->user_name)
                                   -> with('email', $request->email)
                                   -> with('phoneNumber', $request->phoneNumber);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = 'complete';
        $order->save();
        return redirect('/order')->with('success', 'Order Canceled');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->status = 'canceled';
        $order->save();
        return redirect('/order')->with('success', 'Order Canceled');
    }
}
