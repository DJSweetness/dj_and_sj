<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Images;
use Intervention\Image\ImageManagerStatic as Image;

class adminController extends Controller
{
    public function getLogin()
    {
        return view('admin/login');
    }
    
    public function postLogin(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);
        
        if (!Auth::attempt(['name' => $request['name'], 'password' => $request['password']]))
        {
            return redirect()->back()->with(['fail' => 'Could not log you in.']);
        }

        return redirect()->route('admin.index');
    }
    
    public function getIndex()
    {
        return view('admin.index');
    }
    
    public function getArtwork()
    {
        $images = DB::table('images')->orderBy('created_at', 'desc')->paginate(8);

        return view('admin.artwork', ['images' => $images]);
    }
    
    public function upload(Request $request)
    {
    
        //Validation
        $this->validate($request, [
            'name' => 'required|unique:images',
            'file' => 'required|mimes:jpeg,jpg',
            'price' => 'required|min:0|numeric'
        ]);

        //Destination is always the same.
        //Get name as is from file.
        //Get price.
        $destination = "images";
        $fileName = $request->get('name');
        $price = $request->get('price');
        
        //Orient the image to the correct orientation using Intervention and the jpegs exif data.
        //Move the image to our images folder with the user's fileName.
        $ImageObj = $request->file('file');
        $ImageObj = Image::make($ImageObj)->orientate();
        $ImageObj->save('images/' . $fileName);
        
        //Store image info.
        $image = new Images();
        $image->name = $fileName;
        $image->path = 'images/' . $fileName;
        $image->price = $price;
        
        //If saved to database, return success message.
        if($image->save())
        {
            return redirect()->route('admin.artwork')->with(['success' => 'You have successfully added an image!']);
        }
        
        //Else, return with all errors.
        return redirect()->route('admin.artwork')->with([$errors => 'errors']);
    }
    
    public function getSingleImage($image_id)
    {
        $image = Images::find($image_id);
        
        if (!$image)
        {
            return redirect()->route('admin.artwork')->with(['fail' => 'Image not found!']);
        }
        
        return view('admin.single_image', ['image' => $image]);
        
    }
    
    public function delete($image_id)
    {
        
        $image = Images::find($image_id);
        
        if (!$image)
        {
            return redirect()->route('admin.artwork')->with(['fail' => 'Image not found!']);
        }
        
        $image->delete();
        return redirect()->route('admin.artwork')->with(['success' => 'Image successfully deleted!']);
    }
    
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}