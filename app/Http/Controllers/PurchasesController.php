<?php

namespace App\Http\Controllers;

use App\Models\Purchases;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function index()
    {
        $purchases = Purchases::all();
        return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        return view('purchases.create');
    }

    public function store(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('purchases.index');
    }

    public function edit(Product $product)
    {
        return view('purchases.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('purchases.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('purchases.index');
    }
}
