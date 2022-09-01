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
        if($pertanyaan){
            alert()->success('Berhasil.','Tambah Pertanyaan');
            return redirect('/pertanyaan');
        }
        
    }
   

    public function hapusPertanyaan($id){
        $pertanyaan = Pertanyaan::where('id',$id)->first();
        if($pertanyaan != null){
            $pertanyaan->delete();
            alert()->success('Berhasil','Hapus Pertanyaan');
            return redirect('/pertanyaan');
        }
        
    
    }

    public function editPertanyaan($id){
        $pertanyaan = Pertanyaan::where('id',$id)->first();
        if($pertanyaan != null){
            return view('pertanyaan.edit-pertanyaan', compact('pertanyaan'));
        }
        

        
    }
}
