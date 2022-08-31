<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responden;


class ApiResponden extends Controller
{
    //

    public function getAllResponden () {
        $datas = Responden::all();
        $response = ['data'=> $datas , 'message' => 'Get Data successfully.'];
        return response($response, 200);
    }

    public function addResponden (Request $request) {
        $data = new Responden;
        $data->nama = $request->nama;
        $data->umur = $request->umur;
        $data->komentar_tambahan = $request->komentar_tambahan;
        $data->save();
        $response = ['data'=> $data , 'message' => 'Add Data successfully.'];
        return response($response, 200);
    }

}
