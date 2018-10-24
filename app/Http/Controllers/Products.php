<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{
    public function all() {
        $products = DB::table('products')
            ->paginate(6);

        return view('products.list', ['products' => $products]);
    }

    public function view($id) {
        $product = DB::table('products')
            ->where('id', $id)
            ->first();

        return view('products.view', ['product' => $product]);
    }
}
