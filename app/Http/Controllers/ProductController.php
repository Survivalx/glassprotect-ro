<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::guest()) {
            return view('components.wrong');
        }
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // Handle the file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create the product with the validated data and the image path
        $product = Product::create(array_merge(
            $request->validated(),
            ['image' => $imagePath]
        ));

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //     $product = Product::findOrFail($product->id);
        //     return view('product.show', compact('product'));


        $productSpecs = $product->specs; // Assuming you have a relationship defined in the Product model
        return view('product.show', compact('product', 'productSpecs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (Auth::guest()) {
            return view('components.wrong');
        }
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Handle the new image upload
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // Keep the current image if no new image is uploaded
            $imagePath = $product->image;
        }

        // Update the product with the validated data and the image path
        $product->update(array_merge(
            $request->validated(),
            ['image' => $imagePath]
        ));

        return redirect()->route('products.show', $product->id)->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
