<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;
use App\Images;
use App\Http\Controllers\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use View;

class mainController extends Controller
{
    public function getIndex() 
    {
        return view('index');
    }
    
    public function getArtwork(Request $request)
    {
        $images = session()->get('images');
        $filter = session()->get('filter');
        
        if ($images == null)
        {
            $images = DB::table('images')->paginate(8);
            return view('front_end.artwork', ['images' => $images]);
        }
        
        return view('front_end.artwork', compact('images', 'filter'));
    }
    
    public function getSearch(Request $request, $search = null)
    {
        
        $this->validate($request, [
            'search' => 'required|max:25'   
        ]);
        
        $search = $request->get('search');
        
        $images = DB::table('images')->where('name', 'LIKE', '%'.$search .'%')->paginate(8);
        
        $message = 'The filter "' .$search. '" has been set.';
                    
        return redirect()->route( 'artwork' )
            ->with( 'images', $images )
            ->with( 'filter', $message );
    }
    
    public function getMusic()
    {
        return view('front_end.music');
    }
}