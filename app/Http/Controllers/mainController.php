<?php

namespace App\Http\Controllers;

class mainController extends Controller
{
    public function getIndex() 
    {
        return view('index');
    }
    
    public function getArtwork()
    {
        return view('front_end.artwork');
    }
    
    public function getMusic()
    {
        return view('front_end.music');
    }
}