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
                              <form style="margin-top: -10px;">
                                <div class=" col s8 input-field" style="padding-left: 0;">
                                    <input placeholder="" id="amount" type="number" class="validate">
                                </div>
                                <div class="col s4 submitButton1" style="padding-top: 23px; padding-right: 0;">
                                    <a class = "btn right" onclick="amtsubmitted()">Start Game</a>
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
                                  </tbody>
                            </table>
                            </div>
                            
                          </div>
                    </div>
                </div>
            </div>
@endsection
