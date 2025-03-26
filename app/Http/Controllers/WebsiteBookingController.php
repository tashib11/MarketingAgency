<?php

namespace App\Http\Controllers;
use App\Models\WebsiteBooking;
use Illuminate\Http\Request;

class WebsiteBookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'website_type' => 'required|string|max:255',
            'example_website' => 'nullable|url|max:255',
            'description' => 'required|string',
        ]);

        WebsiteBooking::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'company' => $request->company,
            'website_type' => $request->website_type,
            'example_website' => $request->example_website,
            'description' => $request->description,
            'status' => 'pending'
        ]);

        return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
    }

}
