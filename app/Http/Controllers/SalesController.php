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
        $products = Products::paginate(10);
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('sales.index');
    }

    public function edit(Product $product)
    {
        return view('sales.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('sales.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('sales.index');
    }
}
