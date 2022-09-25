<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        return view('auth.profile', array('user' => Auth::user()) );
    }
    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/img' ;
            $file->move($destinationPath,$fileName);

            
            
            $user = Auth::user();
    		$user->image = $fileName;
    		$user->save();
           
        }
        return redirect()->back();
    }
}
