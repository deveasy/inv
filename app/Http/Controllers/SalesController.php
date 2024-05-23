<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Products;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::all();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Products::paginate(15);
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('sales.index');
    }

    public function edit(Products $product)
    {
        return view('sales.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        $product->update($request->all());
        return redirect()->route('sales.index');
    }

    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('sales.index');
    }

    public function search(Request $request){
        $searchTerm = $request->input('searchTerm');

        $products = Products::where('product_name','like','%'.$searchTerm.'%')->take(15)->get();

        return response()->json($products);
    }

    public function getProducts(){
        $products = Products::all();
        return response()->json($products);
    }
}
