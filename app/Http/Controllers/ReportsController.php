<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $sales = Products::all();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        return view('sales.create');
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
