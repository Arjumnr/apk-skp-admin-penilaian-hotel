<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responden;



class ApiResponden extends Controller
{
    //

    public function getAllResponden()
    {
        $datas = Responden::all();
        $response = ['data' => $datas, 'message' => 'Get Data successfully.'];
        return response($response, 200);
    }



    public function addResponden(Request $request)
    {
        try {
            $cekId = Responden::all();
            if ($cekId->isEmpty()) {
                $id = 1;
            } else {
                $id = $cekId->last()->id + 1;
            }

            $data = $request->data;

            if ($data == null) {
                return response()->json(['error' => 'Tidak Ada Data'], 500);
            } else {
                //beri petik dua kata kinerja user_id pertanyaan_id kepentingan waktu _id
                $jsonData = $data;
                $jsonData =  stripslashes($jsonData);
                $dataArray = json_decode($jsonData, true);
                
                foreach ($dataArray as $key => $value) {
                    $responden = new Responden();
                    $responden->id_responden = $id;
                    $responden->kode_pertanyaan = $value['pertanyaan_id'];
                    $responden->kepuasan = $value['kepentingan'];
                    $responden->kinerja = $value['kinerja'];
                    $responden->durasi = $value['waktu'];
                    $responden->save();
                }

               
                if ($responden) {
                    return response()->json(['success' => true, 'data' => $data], 200);
                } else {
                    return response()->json(['error' => 'Data is empty'], 500);
                }
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cekUserId()
    {
        $data = Responden::all();
        //jika kosong kirim id nol jika sudah ada kirim id terakhir
        if ($data->isEmpty()) {
            $response = ['data' => 0, 'message' => 'Get Data successfully.'];
            return response($response, 200);
        } else {
            $response = ['data' => $data->last()->id, 'message' => 'Get Data successfully.'];
            return response($response, 200);
        }
    }

    //post data responden


}
