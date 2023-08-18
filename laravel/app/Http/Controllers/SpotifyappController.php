<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpotifyappModel;

class SpotifyappController extends Controller
{
    public function index(){
        //$spotify = "spotify";
        //return view('spot', compact("spotify"));
       $songs = Song::all();
       dd($songs);
    }
}
