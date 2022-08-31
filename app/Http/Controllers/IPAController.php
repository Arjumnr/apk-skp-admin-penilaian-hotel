<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPAController extends Controller
{
    //
    public function indexIPA()
    {
        return view('ipa.index-ipa');
    }
}
