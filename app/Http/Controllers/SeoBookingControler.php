<?php

namespace App\Http\Controllers;
use App\Models\SEOBooking;

use Illuminate\Http\Request;

class SeoBookingControler extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:20',
            'technology' => 'required|string|max:255',
            'website_link' => 'required|url|max:255',
        ]);

        SEOBooking::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'technology' => $request->technology,
            'website_link' => $request->website_link,
            'status' => 'pending'
        ]);

        return response()->json(['success' => true, 'message' => 'Form submitted successfully!']);
    }

    public function index()
    {
        $bookings = SEOBooking::latest()->get();
        return view('admin.seo-booking', compact('bookings'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,proceed,complete',
        ]);


        $booking = SEOBooking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return response()->json(['success' => true]);
    }



}
