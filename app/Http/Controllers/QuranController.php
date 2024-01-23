<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranController extends Controller
{
    public function index(){
        $dataQuran = Http::get("https://quran-api.santrikoding.com/api/surah");
        return view("index", [
            "response" => json_decode($dataQuran) 
            ]
    ); 
    }
    public function indexId($id){
        $dataQuran = Http::get("https://quran-api.santrikoding.com/api/surah/$id");
        // return $dataQuran->json();
        return view("quransurah", [
            "response" => json_decode($dataQuran) 
            ]
        );
    }
}
