<?php

namespace App\Http\Controllers;
use App\Models\FreeConsultancy;
use Illuminate\Http\Request;

class FreeConsultanyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:20',
            'description' => 'required|string',
        ]);

        FreeConsultancy::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'description' => $request->description,
            'status' => 'pending'
        ]);

        return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
    }

}
