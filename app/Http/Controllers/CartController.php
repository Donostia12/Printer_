<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Carts;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hanya admin yang dapat melihat daftar pemesanan
        $cards = Carts::with('product')->get();
        return view('admin.carts.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $products = Product::all();
        return view('carts.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'product_id'  => 'required|exists:products,id',
            'quantity'    => 'required|integer|min:1',
            'material'    => 'required|string|max:255',
            'design_file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Mengunggah file desain
        if ($request->hasFile('design_file')) {
            $filePath = $request->file('design_file')->store('designs', 'public');
            $validatedData['design_file'] = $filePath;
        }

        // Set status awal pemesanan
        $validatedData['status'] = 'pending';

        // Membuat pemesanan baru
        $card = Carts::create($validatedData);

        // Redirect ke halaman konfirmasi atau detail pemesanan
        return redirect()->route('cards.show', $card->id)->with('success', 'Pemesanan Anda berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $card = Carts::with('product')->findOrFail($id);
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
