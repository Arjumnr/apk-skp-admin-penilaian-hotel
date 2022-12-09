<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    
    
    public function dashboard(Request $request){
        $session = $request->session()->has('username');
        
        if($session == true){
            return view('index');
        } else {
            return redirect('/login');
        }
        return view('index');
    }

    public function logout(Request $request) {
        $request->session()->forget('username');
        alert()->success('Logout','Logout Berhasil.'); 
        return redirect('/login');
    }
}
