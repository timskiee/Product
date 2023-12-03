<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();


        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories= Category::all();
        return view('categories.create', ['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

   
    {
   
        $validateData = $request->validate([

            'name' => 'required'

        ]);

        Category::create($validateData);

        return redirect()->route('category')->with(['success'=> 'Category created']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

         $categories= Category::all();
        return view('categories.index', ['categories'=> $categories]);

      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){



    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
         $category->delete();

    return redirect()->route('category')->with('success', 'Category deleted successfully!');
    }
}
