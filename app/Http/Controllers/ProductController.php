<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();

        return view("products", compact("products"));
    }
    public function show(Product $product, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("product", compact("product", "intent"));
    }
    public function product(Request $request)
    {
        $product = Product::find($request->product);

        $subscription = $request->user()->newSubscription($request->product, $product->stripe_product)
                        ->create($request->token);

        return view("product_success");
    }
}
