<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        return view ('resume',compact('user'));
    }

    
        public function view(){
            $user = auth()->user();
            return view ('view',compact('user'));
        }
    

    public function download(){

        $user = auth()->user();
        $pdf = \PDF::loadView('resume',compact('user'));
        return $pdf->download('your_resume.pdf');
    }

   
   
}
