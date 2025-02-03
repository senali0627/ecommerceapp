<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // For Validation

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user', 'items', 'address'])->paginate(10); // Eager load relationships
        return OrderResource::collection($orders);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'grand_total' => 'required|numeric|min:0',
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
            'status' => 'required|string',
            'currency' => 'required|string',
            'shipping_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
            'items' => 'required|array', // Validate order items as an array
            'items.*.product_id' => 'required|exists:products,id', // Validate product IDs
            'items.*.quantity' => 'required|integer|min:1',       // Validate quantity
            'address_id' => 'required|exists:addresses,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $validated = $request->all();

        $order = Order::create($validated);

        // Create order items
        foreach ($request->input('items') as $item) {
            $order->items()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                // Add other item details as needed (price, etc.)
            ]);
        }

        return new OrderResource($order);
    }

    public function show(string $id)
    {
        $order = Order::with(['user', 'items', 'address'])->findOrFail($id); // Eager load relationships
        return new OrderResource($order);
    }

    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'grand_total' => 'required|numeric|min:0',
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
            'status' => 'required|string',
            'currency' => 'required|string',
            'shipping_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
            'items' => 'required|array', // Validate order items as an array
            'items.*.product_id' => 'required|exists:products,id', // Validate product IDs
            'items.*.quantity' => 'required|integer|min:1',       // Validate quantity
            'address_id' => 'required|exists:addresses,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $validated = $request->all();

        $order->update($validated);

        // Update order items (you might want to handle deletions/additions more carefully)
        $order->items()->delete(); // Delete existing items
        foreach ($request->input('items') as $item) {
            $order->items()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                // Add other item details as needed (price, etc.)
            ]);
        }


        return new OrderResource($order);
    }

    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        $order->items()->delete(); // Delete related order items
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully'], 200);
    }
}