<?php

namespace App\Http\Controllers;
use App\Models\HomeSlide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePage()
    {
        return view('pages.home-page');
    }

}
