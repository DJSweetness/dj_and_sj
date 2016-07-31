<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use App\Images;
use App\Http\Controllers\Route;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function getIndex() 
    {
        return view('index');
    }
    
    public function getArtwork()
    {
        $images = DB::table('images')->paginate(8);
        
        return view('front_end.artwork', ['fail' => 'failed', 'images' => $images]);
    }
    
    public function getSearch(Request $request, $search)
    {
        $this->validate($request, [
            'search' => 'required|max:25'   
        ]);
        
        $search = $request->get('search');
        $images = DB::table('images')->where('name', '>=' , $search)->paginate(8);
        
        return view(front_end.artwork, ['images' => $images, 'success' => 'A filter is set.']);
    }
    
    public function getMusic()
    {
        return view('front_end.music');
    }
}