<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ServiceController extends Controller
{
    public function DMPage(){
        return view('pages.digitalMarket');
    }
    public function WebDevPage(){
        return view('pages.webdevelop');
    }

    public function SEOPage(){
        return view('pages.seoOptimization');
    }
    public function ContentSolPage(){
        return view('pages.contentSol');
    }
    public function ConsultancyPage(){
        return view('pages.consultancy');
    }
    public function CreativeSolPage(){
        return view('pages.creativeSol');
    }

}
