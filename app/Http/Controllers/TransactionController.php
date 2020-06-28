<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
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
    public function myMatches(){
        return view('mymatches');
    }
    
    public function byChips(){
        return view('buy_chips');
    }
    
    public function redeemChips(){
        return view('redeemchips');
    }
    
    public function transaction(){
        return view('transaction');
    }
}
