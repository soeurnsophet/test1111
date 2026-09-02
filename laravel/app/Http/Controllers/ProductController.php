<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\StoreProductRequest;
use App\Http\Resources\Products\GetProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product = Product::find($id);
        if(!$product) 
            return redirect()->route('products.index')->with('error', 'Product not found');
        return view('products.show', compact('product'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){

        $request->validate([
            'barcode' => 'required|string|max:255|unique:products',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'required|string|max:255',
        ]);
        
        Product::create([
            'barcode' => $request->barcode,
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }


    public function destroy($id){
        $product = Product::find($id);
        if(!$product) 
            return redirect()->route('products.index')->with('error', 'Product not found');
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
