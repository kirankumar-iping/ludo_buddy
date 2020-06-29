@extends('layouts.app')

@section('content')
<style>
    .btn {
    background-color: #212838;
    border: 1px solid black !important;
}
</style>
<div class="container">
                <div class="row maincontent">
                    <div class="col l2"></div>
                    <div class="col l8 m12 s12">
                        <div class="card large white">
                            <div class="card-content black-text">
                              <span class="card-title center" style="padding-top:50px;">Create Room Code</span>
                            <form style="padding-top: 40px;" method="POST" action="{{route('room_code.store')}}">
                                {{ csrf_field() }}
                                <div class="input-field">
                                <input id="username" type="text" class="validate" name="room_code" required>
                                <input type="text" name="match_id" value="{{$match_data->id}}" class="form-control"/>
                                    <label for="username">
                                       Room Code
                                    </label>
                                </div>
                                <div class="submitButton center" style="padding-top: 30px;">
                                    <button class = "btn" onclick="Details()"> Submit</button>
                                </div>
                            </form>
                            </div>
                          </div>
                    </div>
                    <div class="col l2"></div>
                </div>
            </div>

@endsection