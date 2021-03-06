<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use App\Technology;
use Illuminate\Http\Request;

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
        return view('resources.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->input());

        if ($request->hasFile('featured_image')) {
            $product->featured_image = upload_file('featured_image', "/assets/products/$product->id");
            $product->save();
        }

        return redirect("/products");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('resources.products.edit', compact('product'));
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
        $product->update($request->input());

        if ($request->hasFile('featured_image')) {
            $product->featured_image = upload_file('featured_image', "/assets/products/$product->id");
            $product->save();
        }

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products');
    }

    public function images(Product $product) {
        $productImages = ProductImage::where('product_id', $product->id)->get();
        return view('resources.products.images.index', compact('product', 'productImages'));
    }

    public function technologies(Product $product) {
        $technologies = Technology::all();
        $product_technologies = $product->technologies();
        return view('resources.products.technologies.index', compact('product', 'product_technologies', 'technologies'));
    }

    public function syncTechnology(Product $product) {
        request()->validate([
            'technology_id' => 'required',
        ]);
        $product->technologies()->toggle(request()->input('technology_id'));
        return redirect("/products/$product->id/technologies");
    }
}

