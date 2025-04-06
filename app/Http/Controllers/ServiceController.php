<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ServiceController extends Controller
{
    public function getServices()
    {
        // Cache services for 60 minutes to reduce DB load
        $services = Cache::remember('services.list', 60, function () {
            return Services::select('id', 'title', 'description')->get();
        });

        return response()->json(['data' => $services]);
    }

    public function show($id)
    {
        // Define service pages based on ID
        $pages = [
            1 => 'pages.digitalMarket',
            2 => 'pages.webdevelop',
            3 => 'pages.seoOptimization', // Example for future services
            4 => 'pages.contentSol',
            5 => 'pages.consultancy',
            6 => 'pages.creativeSol', // Example for future services
        ];

        // Check if the ID exists in the array
        if (array_key_exists($id, $pages)) {
            return view($pages[$id]);
        }

        // If ID is not found, show a 404 error page
        abort(404);
    }


}
