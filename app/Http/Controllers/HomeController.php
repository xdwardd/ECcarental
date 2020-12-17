<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        return view('main');
    }
    public function home(){ 
        return view('home');
    }

        public function dashboard(){
            $user_id = auth()->user()->id;
            $user = User::findorFail($user_id);
            
            return view('dashboard')->with('details',$user->details);
         
        
    }
}
