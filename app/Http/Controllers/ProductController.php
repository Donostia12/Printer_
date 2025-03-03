<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('categories')->get();
        return view('admin.products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/products', 'public');
            $validatedData['image'] = $imagePath;
        }


        $product = Product::create($validatedData);


        $product->categories()->attach($validatedData['categories']);


        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }




    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Mengambil data produk beserta kategorinya
        $product = Product::with('categories')->findOrFail($id);
        return view('admin.products.show', compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with('categories')->findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categories' => 'required|array',
            'categories.*' => 'exists:categories,id',
        ]);

        $product = Product::findOrFail($id);


        if ($request->hasFile('image')) {

            if ($product->image && Storage::exists($product->image)) {
                Storage::delete($product->image);
            }

            $imagePath = $request->file('image')->store('images/products', 'public');
            $validatedData['image'] = $imagePath;
        }

        $product->update($validatedData);


        $product->categories()->sync($validatedData['categories']);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);


        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }


        $product->categories()->detach();


        $product->delete();


        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
