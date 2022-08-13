<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespondenController extends Controller
{
    
    public function indexResponden()
    {
        return view('responden.index-responden');
    }
}
