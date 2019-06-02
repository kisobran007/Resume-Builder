<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumeController extends Controller{
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
//    public function index()
//    {
//        return view('home');
//    }
    public function createResume(){
        $user = \Auth::user();
        return view('resume.createResume')->with('user', $user);
    }
    public function createResumePost(Request $request){
        echo '<pre>RESUME: '; print_r($request); die();
    }
}
