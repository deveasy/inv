<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Products();

        $product->product_name = $request->input('productName');
        $product->product_description = $request->input('productDescription');
        $product->categories_id = $request->input('category');
        $product->date_created = date('Y-m-d');

        $product->save();

        return redirect()->route('products.index');
    }

    public function import(Request $request){
        $file = $request->file('import');

        // Read the CSV file
        $data = array_map('str_getcsv', file($file));

        foreach ($data as $row) {
            Products::create([
                'product_name' => $row[0],
                'product_description' => $row[1],
                'price' => $row[2],
                'categories_id' => $row[3],
                'date_created' => date('Y-m-d')
            ]);
        }

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    public function categories(){
        return view('products.categories');
    }
}
