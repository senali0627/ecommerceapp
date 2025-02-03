<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index() {
        return Review::all();
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_name' => 'required|string|max:255',
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = Review::create($validated);
        return response()->json($review, 201);
    }

    public function update(Request $request, $id) {
        $review = Review::findOrFail($id);
        $review->update($request->all());
        return response()->json($review);
    }

    public function destroy($id) {
        $review = Review::findOrFail($id);
        $review->delete();
        return response()->json(null, 204);
    }
}

