<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Http\Resources\AddressResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // For Validation


class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::paginate(10);
        return AddressResource::collection($addresses);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'order_id' => 'required|exists:orders,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20', // Adjust max length as needed
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10', // Adjust max length as needed
            'full_name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $validated = $request->all();

        $address = Address::create($validated);

        return new AddressResource($address);
    }

    public function show(string $id)
    {
        $address = Address::findOrFail($id);
        return new AddressResource($address);
    }

    public function update(Request $request, string $id)
    {
        $address = Address::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'order_id' => 'required|exists:orders,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20', // Adjust max length as needed
            'street_address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10', // Adjust max length as needed
            'full_name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }

        $validated = $request->all();

        $address->update($validated);

        return new AddressResource($address);
    }

    public function destroy(string $id)
    {
        $address = Address::findOrFail($id);
        $address->delete();

        return response()->json(['message' => 'Address deleted successfully'], 200);
    }
}