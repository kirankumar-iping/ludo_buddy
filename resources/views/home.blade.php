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
                    <div class="col l6 m12 s12">
                        <div class="card large white">
                            <div class="card-content black-text">
                              <span class="card-title">Enter Amount Here</span>
                            <form style="margin-top: -10px;" action="{{ route('matches.store')}}" method="POST">
                              {{ csrf_field() }}
                                <div class=" col s8 input-field" style="padding-left: 0;">
                                    <input placeholder="" id="amount" name="amt" type="number" class="validate">
                                </div>
                                <div class="col s4 submitButton1" style="padding-top: 23px; padding-right: 0;">
                                    <button class = "btn right" onclick="amtsubmitted()" type="submit">Start Game</button>
                                </div>
                            </form>
                            <br> 
                            <br>
                            <span class="card-title" style="margin-top: 33px;">Open Matches</span>
                            <table>
                                <tbody>
                                    <tr>
                                      <td id="Username"></td>
                                      <td class="center" id="amt" style="text-align: end"></td>
                                      <td><a onclick="playbuttonclicked()" class="btn right" href="/roomcode">Play</a></td>
                                    </tr>
                                    @foreach($match_data as $data)
                                    <tr>
                                      <td id="Username"></td>
                                    <td class="center" id="amt" style="text-align: end">{{$data->name}}{{$data->amt}}</td>
                                      <td>
                                          <form style="margin-top: -10px;" action="{{url('play_match')}}" method="POST">
                                              {{ csrf_field() }}
                                          <input type="hidden" name="match_id" value="{{$data->id}}"/>
                                        <button onclick="playbuttonclicked()" class="btn right" type="submit">Play</button></td>
                                          </form>
                                    </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                            </div>
                            
                          </div>
                    </div>
                    <div class="col l6 m12 s12">
                        <div class="card large white">
                            <div class="card-content black-text">
                            <span class="card-title">
                                Running Matches
                            </span>
                            <table>
                                <tbody>
                                    <tr>
                                      <td><span id="Player1"> </span><i class="fas fa-dice-d6"></i><span id="Player2"> </span></td>
                                      <td class="right" id="bettingamt"></td>
                                    </tr>
                                    @foreach($current_data as $data)
                                    <tr>
                                      <?php 
                                      $player_data=\App\User::select('name')->where(['id'=>$data->player_id])->first();  
                                      ?>
                                      <td id="Username"></td>
                                    <td  id="amt">{{$data->name}}
                                      <span style="font-size: 16px;">🎲</span>
                                      {{$player_data->name}}</td>
                                      <td>
                                          <input type="hidden" name="match_id" value="{{$data->id}}"/>
                                      <span class="text-success text-bold matchbox-amount ng-binding"><img class="spinImg" src="images/chip2.png" height="18px" alt=""> {{$data->amt}}</span>
                                    </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                            </div>
                            
                          </div>
                    </div>
                </div>
            </div>
@endsection
