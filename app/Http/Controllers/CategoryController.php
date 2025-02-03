<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Storage; 

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->paginate(10); 
        return CategoryResource::collection($categories);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'is_active' => 'boolean', 
        ]);

        // Generate slug
        $validated['slug'] = Str::slug($validated['name']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('category_images', 'public'); 
            $validated['image'] = $imagePath;
        }

        $category = Category::create($validated);

        return new CategoryResource($category);
    }

    public function show(string $id)
    {
        $category = Category::with('products')->findOrFail($id); 
        return new CategoryResource($category);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'is_active' => 'boolean',
        ]);

        $category = Category::findOrFail($id);

        
        if ($category->name != $request->input('name')) {
            $validated['slug'] = Str::slug($validated['name']);
        }


        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
            $imagePath = $request->file('image')->store('category_images', 'public');
            $validated['image'] = $imagePath;
        }

        $category->update($validated);

        return new CategoryResource($category);
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Delete associated image if it exists
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted successfully'], 200);
    }
}