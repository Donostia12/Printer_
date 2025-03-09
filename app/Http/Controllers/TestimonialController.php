<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:2048', // Format gambar dan maksimum ukuran 2MB
        ]);

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('testimonials', 'public');
            $validatedData['image'] = $filePath;
        }

        $validatedData['status'] = 'off';

        testimonial::create($validatedData);

        return redirect()->back()->with('success', 'Testimonial Anda berhasil dikirim!');
    }
}
