<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Carts;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $carts = Carts::with('product')
            ->whereIn('status', ['proses', 'pending'])
            ->get();

        $statusOrder = ['proses', 'pending'];
        $sortedCarts = $carts->sortBy(function ($cart) use ($statusOrder) {
            return array_search($cart->status, $statusOrder, true);
        });
        $sortedCarts = $sortedCarts->values();

        return view('admin.carts.index', compact('sortedCarts'));
    }

    public function showCompletedOrders()
    {
        $carts = Carts::with('product')
            ->where('status', 'selesai')
            ->get();

        $sortedCarts = $carts->sortBy(function ($cart) {
            return array_search($cart->status, ['selesai'], true);
        });
        $sortedCarts = $sortedCarts->values();
        return view('admin.carts.selesai', compact('sortedCarts'));
    }

    public function showCanceledOrders()
    {

        $carts = Carts::with('product')
            ->where('status', 'cancel')
            ->get();

        $sortedCarts = $carts->sortBy(function ($cart) {
            return array_search($cart->status, ['cancel'], true);
        });

        $sortedCarts = $sortedCarts->values();
        return view('admin.carts.selesai', compact('sortedCarts'));
    }

    public function create()
    {
        $products = Product::all();
        return view('carts.create', compact('products'));
    }

    public function store(Request $request)
    {
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


    public function show($id)
    {
        $cartstatus = Carts::find($id);
        switch ($cartstatus->status) {
            case "pending":
                $cartstatus->status = "proses";
                break;

            default:
                $cartstatus->status = "pending";
                break;
        }

        $cartstatus->save();
        return redirect()->back()->with('success', 'Status pesanan Anda berhasil di update!');
    }
    public function success($id)
    {
        $cartstatus = Carts::find($id);

        $cartstatus->status = "selesai";


        $cartstatus->save();
        return redirect()->back()->with('success', 'Status pesanan Anda berhasil di update!');
    }
    public function cancel($id)
    {
        $cartstatus = Carts::find($id);
        $cartstatus->status = "cancel";

        $cartstatus->save();
        return redirect()->back()->with('success', 'Status pesanan Anda berhasil di update!');
    }

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
