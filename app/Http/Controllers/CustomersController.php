<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $products = Customers::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('customers.index');
    }

    public function edit(Product $product)
    {
        return view('customers.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('customers.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('customers.index');
    }
}
