<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductSpecs;
use Illuminate\Http\Request;

class ProductSpecsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //     $productSpecs = ProductSpecs::all();
        //     return view('product.show', compact('productSpecs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.show');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product)
    {
        $productSpec = $request->validate([
            'specKey' => 'nullable|string',
            'specValue' => 'nullable|string',
        ]);
        $productSpec['product_id'] = $product->id;

        ProductSpecs::create($productSpec);
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductSpecs $productSpecs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductSpecs $productSpecs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductSpecs $productSpecs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $spec = ProductSpecs::find($id);

       if ($spec) {
        $spec->delete();
       }

       return back();
    }
}
