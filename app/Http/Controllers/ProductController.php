<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products.
    public function index()
    {
        $products = Product::paginate(1);
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product.
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in the database.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $data = $request->only(['name', 'price', 'quantity']);
        $data['total_amount'] = $data['price'] * $data['quantity'];
    
        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    // Show the form for editing the specified product.
    public function edit(Product $product)
    {
        return view('products.create', compact('product'));
    }

    // Update the specified product in the database.
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $data = $request->only(['name', 'price', 'quantity']);
        $data['total_amount'] = $data['price'] * $data['quantity'];
        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from the database.
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
