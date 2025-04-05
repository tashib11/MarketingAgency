<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getServices()
    {
        $services = Services::all(); // Fetch all services from database
        return response()->json(['data' => $services]);
    }

    public function show($id)
    {
        // Define service pages based on ID
        $pages = [
            1 => 'pages.digitalMarket',
            2 => 'pages.webdevelop',
            3 => 'pages.seoOptimization', // Example for future services
            4 => 'pages.contentSol', // Example for future services
        ];

        // Check if the ID exists in the array
        if (array_key_exists($id, $pages)) {
            return view($pages[$id]);
        }

        // If ID is not found, show a 404 error page
        abort(404);
    }


}
