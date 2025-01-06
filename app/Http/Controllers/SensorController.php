<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{

    public function create(Request $request)
    {
        $data = $request->get("data");

        if (is_null($data)) {

            return response()->json([
                "message" => "Gagal terima data diserver, data yang dikirim kosong"
            ]);

        }

        $array = explode("|", $data);

        if (!empty($array)) {
            $suhu = $array[0];
            $kelembapan = $array[1];
            $gas = $array[2];
            $kepadatamDebu = $array[3];


            // simpan
            $sensor = Sensor::create([
                "suhu" => $suhu,
                "kelembapan" => $kelembapan,
                "gas" => $gas,
                "debu" => $kepadatamDebu,
            ]);


            return response()->json([
                "message" => "Berhasil terima data diserver"
            ]);
        }
    }
}
