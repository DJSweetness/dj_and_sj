<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;

class mainController extends Controller
{
    public function getIndex() 
    {
        return view('index');
    }
    
    public function getArtwork()
    {
        $images = DB::table('images')->get();
        return view('front_end.artwork', ['images' => $images]);
    }
    
    public function getMusic()
    {
        return view('front_end.music');
    }
}