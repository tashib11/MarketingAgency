<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultancyController extends Controller
{

    public function ConsultPage()
    {
        return view('pages.consult-page');
    }
}
