<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class ApiPertanyaan extends Controller
{
    //

    public function getAllPertanyaan () {
        $datas = Pertanyaan::all();
        $response = ['data'=> $datas , 'message' => 'Get Data successfully.'];
        return response($response, 200);
    }
}
