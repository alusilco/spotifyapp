<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SongModel;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function spotify()
    {
        $songs = SongModel::all();
        return view('spotify', ['songs' => $songs]);
    }
}


    /**
     * Show the form for creating a new resource.
     */

