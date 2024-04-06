<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
        $products = Suppliers::all();
        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('suppliers.index');
    }

    public function edit(Product $product)
    {
        return view('suppliers.edit', compact('suppliers'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('suppliers.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('suppliers.index');
    }
}
