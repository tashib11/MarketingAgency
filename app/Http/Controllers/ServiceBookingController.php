<?php

namespace App\Http\Controllers;
use App\Models\ServiceBooking;
use Illuminate\Http\Request;

class ServiceBookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'example_website' => 'nullable|url|max:255',
            'description' => 'required|string',
        ]);

        ServiceBooking::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'company' => $request->company,
            'service_type' => $request->service_type,
            'example_website' => $request->example_website,
            'description' => $request->description,
            'status' => 'pending'
        ]);

        return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
    }


}
