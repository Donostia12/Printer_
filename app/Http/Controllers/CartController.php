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
        $carts = Carts::with('product')->get();

        $statusOrder = ['pending', 'proses', 'selesai', 'cancel'];

        $sortedCarts = $carts->sortBy(function ($cart) use ($statusOrder) {
            return array_search($cart->status, $statusOrder);
        });


        return view('admin.carts.index', compact('sortedCarts'));
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


        if ($request->hasFile('design_file')) {
            $filePath = $request->file('design_file')->store('designs', 'public');
            $validatedData['design_file'] = $filePath;
        }


        $validatedData['status'] = 'pending';

        $card = Carts::create($validatedData);


        return redirect()->route('cards.show', $card->id)->with('success', 'Pemesanan Anda berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cartstatus = Carts::find($id);
        switch ($cartstatus->status) {
            case "pending":
                $cartstatus->status = "proses";
                break;
            case "proses":
                $cartstatus->status = "selesai";
                break;
            case "selesai":
                $cartstatus->status = "cancel";
                break;
            default:
                $cartstatus->status = "pending";
                break;
        }

        $cartstatus->save();
        return redirect()->back()->with('success', 'Testimonial Anda berhasil di update!');
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
