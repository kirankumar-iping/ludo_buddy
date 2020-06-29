<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $match_data = \App\Matches::select('tbl_matches.*', 'users.name')
            ->leftjoin('users', 'users.id', '=', 'tbl_matches.user_id')
            ->where(['is_active' => '1', 'tbl_matches.match_status' => '1'])->get();
        $running_match_data = \App\Matches::select('tbl_matches.*', 'users.name')
            ->leftjoin('users', 'users.id', '=', 'tbl_matches.user_id')
            ->where(['is_active' => '1', 'tbl_matches.match_status' => '2'])->get();
        // echo "<pre/>";print_r($match_data);exit;
        return view('home', ['match_data' => $match_data, 'current_data' => $running_match_data]);
    }
}
