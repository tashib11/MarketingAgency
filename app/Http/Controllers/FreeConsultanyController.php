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

    public function index()
    {
        $bookings = FreeConsultancy::latest()->get();
        return view('admin.free-consultancy', compact('bookings'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,proceed,complete',
        ]);


        $booking = FreeConsultancy::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return response()->json(['success' => true]);
    }

}
