<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user_id = json_decode(Auth::user()->id,true);
              return $next($request);
        });
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $requestData['user_id'] = $this->user_id; 
        $requestData['match_status'] = 1;
        $match_data = \App\Matches::create($requestData);
        return view('room_code.create',['match_data' => $match_data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
    }
    public function play(Request $request)
    {
        $requestData = $request->all();
        $first_player_data = \App\Matches::select('*')->where(['id'=>$requestData['match_id']])->first();
        $requestData['user_id'] = $this->user_id; 
        $requestData['match_status'] = 2;
        $requestData['player_id'] = $first_player_data->user_id;
        $match_data = \App\Matches::create($requestData);
        \App\Matches::select('*')->where(['id'=>$requestData['match_id']])->update(['player_id' => $first_player_data->user_id,'match_status'=>2]);
        $match_data = \App\Matches::select('tbl_matches.*','users.name')
        ->leftjoin('users','users.id','=','tbl_matches.user_id')
        ->where(['is_active'=>'1','tbl_matches.match_status'=>'1'])->get();
        return view('home',['match_data' => $match_data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
