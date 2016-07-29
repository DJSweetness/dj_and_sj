<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    
    public function getIndex(Request $request)
    {
        return view('admin.index');
    }
    
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}