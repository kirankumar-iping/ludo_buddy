<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructionController extends Controller
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
    public function howtoPlay()
    {
        return view('howtoplay');
    }
    
    public function Faq(){
        return view('faq');
    }
    
    public function TermsCondition(){
        return view('terms_and_condition');
    }
}
