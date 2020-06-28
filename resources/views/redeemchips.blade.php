@extends('layouts.app')

@section('content')

 <div class="container">
                <div class="row maincontent">
                    <div class="col l2"></div>
                    <div class="col l8 m12 s12">
                        <div class="card large white">
                            <div class="card-content black-text">
                              <span class="card-title center" style="padding-top: 20px;">Redeem Chips</span>
                              <form style="padding-bottom: 0; padding-top:20px;">
                                <div class="input-field">
                                    <input id="phone-no" type="number" class="validate">
                                        <label for="phone-no">
                                            Paytm Mobile Number
                                        </label>
                                        <div>
                                        Withdrawal may take upto 6-72 Hours <br>
                                        <b>Only 2 request allowed per day.</b>
                                        </div>
                                </div>
                                <div class="input-field ">
                                    <input id="amount" type="number" class="validate">
                                    <label  for="amount">
                                        Amount
                                    </label>
                                    <div>
                                        1 Rupee = 1 Chip <br>
                                        Minimum Withdraw: 50 Chips<br>
                                        Withdrawal amount will be sent in paytm number given by you.
                                    </div>
                                </div>
                                <div class="submitButton center" style="padding-top: 50px;">
                                    <a class = "btn" onclick="Details()"> Submit</a>
                                </div>
                            </form>
                            </div>
                          </div>
                    </div>
                    <div class="col l2"></div>
                </div>
            </div>
@endsection