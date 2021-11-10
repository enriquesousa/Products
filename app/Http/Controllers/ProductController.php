<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products;

        dd($products);
        return view('products.index');
    }

    public function create()
    {
        return 'Esta es la forma para crear un producto desde el Controlador';
    }

    public function store()
    {
        //
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);
        return view('products.show');
    }

    public function edit($product)
    {
        return "Mostrando la forma para editar producto con id {$product} desde Controlador";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }

}
