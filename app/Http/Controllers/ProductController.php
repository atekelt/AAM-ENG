<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Cart;
use App\Brand;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $page = 'products';
        return view('products.index')->with('products',$products)->with('page',$page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(\auth::guest())
        {
            return redirect('/login');
        }
        else
        {
            $brands = Brand::pluck('name', 'id');
        return view('products.create')-> with('brands', $brands);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(\auth::guest())
        {
            return redirect('/login');
        }
        else
        {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if($request->hasFile('cover_image')){
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('images', $fileNameToStore);
        }

        else{
            $fileNameToStore = 'noimage.jpg';
        }


        $product = new Product;
        $product->name = $request->input('name');
        $product->product_number = $request->input('product_number');
        $product->count = $request->input('count');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->brand_id = $request->input('brand_id');

        
        $product->image = $fileNameToStore;
        $product->save();

        return redirect('/products/create')->with('success', 'Product Item Added');   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $page = "Product - ".$product->name; 
        return view('products.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    
}
