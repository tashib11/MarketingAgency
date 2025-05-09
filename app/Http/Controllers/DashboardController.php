<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {

        return view('admin.blog-create');

    }

 
}
