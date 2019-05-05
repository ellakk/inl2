<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return response()->json(Product::all()->makeHidden(["stores", "reviews"]));
    }

    public function create(Request $request) {
        $product = new Product();
        $product->title = $request->input("title");
        $product->brand = $request->input("brand");
        $product->image = $request->input("image");
        $product->description = $request->input("description");
        $product->price = $request->input("price");
        $product->save();

        return response()->json(["success" => true]);
    }

    public function show($id) {
        return response()->json(Product::find($id));
    }
}
