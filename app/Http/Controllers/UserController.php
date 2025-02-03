<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Validator; 

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('orders')->paginate(10); 
        return UserResource::collection($users);
    }

    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }


        $validated = $request->all();
        $validated['password'] = Hash::make($validated['password']); // Hash the password

        $user = User::create($validated);

        return new UserResource($user);
    }

    public function show(string $id)
    {
        $user = User::with('orders')->findOrFail($id); // Eager load orders
        return new UserResource($user);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id], // Unique except for current user
            'password' => ['nullable', 'string', 'min:8', 'confirmed'], // Password update is optional
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); // Return validation errors
        }


        $validated = $request->all();

        if ($request->filled('password')) { // Only update password if provided
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']); // Remove password from $validated if not provided
        }

        $user->update($validated);

        return new UserResource($user);
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}