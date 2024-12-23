<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\ProductSpecs;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(12); // Adjust 'relatedModel' to your actual relationship if any
        return view('product.index', compact('products'));
    }


    /**
     * Display a latest 4 products on main page
     */
    public function recent()
    {
        // orderBy('created_at', 'desc')->

        $recent = Product::orderBy('created_at', 'desc')->take(4)->get();
        // dd($recent);
        return view('app', ['recent' => $recent]);
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
        $imagePaths = [];

        // Handle the file uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('images', 'public');
            }
        }

        // Concatenate the image paths into a single string
        $imagePathsString = implode(',', $imagePaths);

        // Create the product with the validated data and the image paths string
        $product = Product::create(array_merge(
            $request->validated(),
            ['images' => $imagePathsString]
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

        // Update the product with the validated data without changing the images
        $product->update($request->validated());

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
