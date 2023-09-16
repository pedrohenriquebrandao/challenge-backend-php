<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::all();
        
        return $products; 
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        Product::create($request->all());
        return response()->json(['success'=>'true','message' => 'Product created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $product; 
    }

}
