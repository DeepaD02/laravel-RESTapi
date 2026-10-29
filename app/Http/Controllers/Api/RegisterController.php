<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        // Step 1: Validate incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:register,email',
            'password' => 'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        // Step 2: Insert data into database
        $registration = Registration::create($validated);

        // Step 3: Return JSON response
        return response()->json([
            'message' => 'Registration successful',
            'data' => $registration,
        ], 201);
    }

    public function index(){
        $registration = Registration::all();

        return response()->json([
             'message' => 'Registrations retrieved successfully',
             'data' => $registration,
        ],200);
    }


    public function show($id){

    $registration = Registration::find($id);

    return response()->json([
        'message' => "Registrations retrived successfully",
        'data' => $registration,
    ],200);

    }
}
