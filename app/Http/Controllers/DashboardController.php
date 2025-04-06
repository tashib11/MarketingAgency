<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $data = [];
        $totalUsers = User::count();
        $data['totalUsers'] = $totalUsers;
        return view('admin.dashboard', $data);
        // return view('pages.home-page');

    }
}
