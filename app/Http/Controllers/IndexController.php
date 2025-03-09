<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();

        return view('home', compact('categories'));
    }

    public function carts()
    {
        $products = Product::all();
        return view('carts', compact('products'));
    }
    public function store_carts(Request $request)
    {

        $validatedData = $request->validate([
            'customer_name'    => 'required|string|max:255',
            'customer_email'   => 'required|email|max:255',
            'customer_phone'   => 'required|string|max:20',
            'product_id'       => 'required|exists:products,id',
            'quantity'         => 'required|integer|min:1',
            'material'         => 'required|string|max:255',
            'design_file'      => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);


        if ($request->hasFile('design_file')) {
            $filePath = $request->file('design_file')->store('designs', 'public');
            $validatedData['design_file'] = $filePath;
        }

        $validatedData['status'] = 'pending';


        $cart = Carts::create($validatedData);


        return redirect()->route('home', $cart->id)->with('success', 'Pemesanan Anda berhasil dibuat!');
    }
}
