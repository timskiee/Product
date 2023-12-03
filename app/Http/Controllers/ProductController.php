<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $products = Product::all();
        return view('products.index', compact('products'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $categories = Category::all();

        return view('products.create' , ['categories'=> $categories]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   



    


    $validateData = $request->validate([

    'name' => 'required',
      'description' => 'required',
     'price' => 'required|numeric',
  'category_id' => 'required|exists:categories,id'




    ]);
        Product::create($validateData);
        return redirect()->route('product.index')->with('success', 'Product created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = Product::with('category')->get();

        return view('products.index', ['products'=> $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         $validateData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
    ]);

     $product->update($validateData);

    return redirect()->route('product.index')->with('success', 'Product updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)

    {
        //
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
