<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('product')->get();

        return view('katalog', compact('products'));
    }

    public function show($id)
    {
        $product = DB::table('product')->where('id', $id)->first();

        return view('detail', compact('product'));
    }
}