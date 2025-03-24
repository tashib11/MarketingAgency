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
}
