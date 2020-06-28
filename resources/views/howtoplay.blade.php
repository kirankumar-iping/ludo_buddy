@extends('layouts.app')

@section('content')
   
     
            <div class="container">
                <div class="row maincontent">
                    <div class="col s12 center header">
                        Please Watch Both Videos below for help
                    </div>
                    <div class="col s12 player1">
                        Player 1 Screen
                    </div>
                    <div class="col s12">
                       <iframe width="100%" height="315" src="https://www.youtube.com/embed/xi4WGpITC7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col s12 player2">
                        Player 2 Screen
                    </div>
                    <div class="col s12">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/BRXVRlD6T1w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
                    </div>
                    <div class="col s12 center">
                        <a class="btn btn-large center" href="/dashboard">Play Now</a>
                    </div>
                </div>
            </div>
@endsection