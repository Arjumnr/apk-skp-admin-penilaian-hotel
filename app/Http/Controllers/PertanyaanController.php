<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    //
    public function indexPertanyaan()
    {
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan.index-pertanyaan', compact('pertanyaan'));
    }

   

    public function tambahPertanyaan(){
        return view('pertanyaan.tambah-pertanyaan');
    }

    public function storePertanyaan(Request $request){
        $request = $request->all();
        $pertanyaan = Pertanyaan::create($request);
        return redirect('/pertanyaan');
        
    }
   

    public function hapusPertanyaan($id){
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect('/pertanyaan');

    }
}
