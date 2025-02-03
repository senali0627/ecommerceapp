<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; // For file storage
use Illuminate\Support\Facades\Validator; // For Validation

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10); // Eager load category
        return ProductResource::collection($products);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id', // Check if category exists
            'name' => 'required|string|max:255',
            'images' => 'required|array', // Validate as an array of images
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'in_stock' => 'boolean',
            'on_sale' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }


        $validated = $request->all();

        $validated['slug'] = Str::slug($validated['name']);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('product_images', 'public');
                $imagePaths = $path;
            }
        }
        $validated['images'] = json_encode($imagePaths); // Store image paths as JSON

        $product = Product::create($validated);

        return new ProductResource($product);
    }

    public function show(string $id)
    {
        $product = Product::with('category')->findOrFail($id); // Eager load category
        return new ProductResource($product);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:categories,id', // Check if category exists
            'name' => 'required|string|max:255',
            'images' => 'nullable|array', // Images are optional on update
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'is_active' => 'boolean',
            'is_featured' => 'boolean',
            'in_stock' => 'boolean',
            'on_sale' => 'boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $validated = $request->all();

        if ($product->name!= $request->input('name')) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        if ($request->hasFile('images')) {
            // Delete old images
            $oldImagePaths = json_decode($product->images);
            if ($oldImagePaths) {
                foreach ($oldImagePaths as $path) {
                    Storage::disk('public')->delete($path);
                }
            }

            // Store new images
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('product_images', 'public');
                $imagePaths = $path;
            }
            $validated['images'] = json_encode($imagePaths);
        }

        $product->update($validated);

        return new ProductResource($product);
    }


    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        // Delete associated images
        $imagePaths = json_decode($product->images);
        if ($imagePaths) {
            foreach ($imagePaths as $path) {
                Storage::disk('public')->delete($path);
            }
        }

        $product->delete();

        return response()->json(['message' => 'Product deleted successfully'], 200);
    }
}