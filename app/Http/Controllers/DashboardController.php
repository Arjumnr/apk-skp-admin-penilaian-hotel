<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Responden;


class DashboardController extends Controller
{
    
    
    public function dashboard(Request $request){
        $session = $request->session()->has('username');
        
        if($session == true){
            //jumlah pertanyaan
            $jumlah_pertanyaan = Pertanyaan::count();
            $jumlah_responden = Responden::count();
            return view('index', compact('jumlah_pertanyaan', 'jumlah_responden'));
        } else {
            return redirect('/login');
        }
        return view('login');
    }

    public function logout(Request $request) {
        $request->session()->forget('username');
        alert()->success('Logout','Logout Berhasil.'); 
        return redirect('/login');
    }
}
