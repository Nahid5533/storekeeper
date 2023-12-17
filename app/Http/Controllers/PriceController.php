<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class create_PriceController extends Controller
{
    public function showPriceForm($productId)
    {
        $product = Product::findOrFail($productId);
        return view('products.edit_price', compact('product'));
    }

    public function updatePrice(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $product->price = $request->input('price');
        $product->save();

        // Redirect or return response
    }
}