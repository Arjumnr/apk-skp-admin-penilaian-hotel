<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSIController extends Controller
{
    //
    public function indexCSI()
    {
        return view('csi.index-csi');
    }
}
