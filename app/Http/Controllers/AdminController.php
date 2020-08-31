<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\auth::guest()){
            
            return redirect('/login');
        }
        else
        {
            
        $products = Product::orderBy('created_at','desc')->get();
        return view ('admin.index')-> with('products', $products);
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
        if(\auth::guest())
        {
            return redirect('/login');
        }
        else
        {
            $product = Product::find($id);
            return view('admin.edit')-> with('product', $product);
            
        }
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
        if(\auth::guest())
        {
            return redirect('/login');
        }
        else
        {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required'
        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->product_number = $request->input('product_number');
        $product->count = $request->input('count');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->brand_id = $request->input('brand_id');
        $product->image = $request->input('image');

        $product->save();

        return redirect('/admin/'.$id.'/edit')->with('success', 'Product Item Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(\auth::guest())
        {
            return redirect('/login');
        }
        else
        {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin')->with('success', 'Product Item Deleted');
        }
    }
}
