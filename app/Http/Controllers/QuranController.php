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
        
        return view("quransurah", [
            "response" => json_decode($dataQuran) 
            ]
        );
    }
    public function search(Request $request){
    $searchTerm = $request->input('search');

    $dataQuran = Http::get("https://quran-api.santrikoding.com/api/surah");

    if ($dataQuran->successful()) {
        $quranData = json_decode($dataQuran);

        // Lakukan filter berdasarkan nama surah jika ada search 
        if ($searchTerm) {
            $searchResults = array_filter($quranData, function ($surah) use ($searchTerm) {
                return stripos($surah->nama_latin, $searchTerm) !== false;
            });
        } else {
            $searchResults = $quranData; 
        }

        return view('search', [
            'searchTerm'    => $searchTerm,
            'searchResults' => $searchResults,
        ]);
    } else {
        
        return view('error');
    }
}

    

}
