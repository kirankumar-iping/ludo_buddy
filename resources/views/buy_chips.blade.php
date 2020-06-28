@extends('layouts.app')

@section('content')
<style>
    div {
        color: #000000;
    }
</style>

<div class="container">
    <div class="row maincontent">
        <div class="col l2"></div>
        <div class="col l8 m12 s12">
            <div class="card large white">
                <div class="card-content black-text" style="padding-top: 0; padding-bottom: 0;">
                    <span class="card-title center" style="padding-top: 25px; margin-bottom: 0;">Add Chips via
                        Paytm</span>
                    <form style="padding-bottom: 0;">
                        <div class="col s12 m12 l12">
                            <label for="upi_id">
                                UPI
                            </label>

                            <input id="upi_id" type="text" class="validate" value="test@upi" readonly>

                            <p>
                            </p>
                            <li>Minimum Deposit: <strong>50 Chips</strong></li>
                            <li class="text-warning">UPI ID changes regularly, Always check before sending money.</li>
                            <li class="text-success">Money will be credited on account immediately</li>
                            <p></p>
                        </div>
                        <div class="input-field" style="margin-top: 0;">
                            <input disabled id="disabled" type="number" class="validate">
                            <div class="text-info">For automate transfer of money into your account. Send money by
                                <b>PAYTM</b> to the
                                number: <span id="adminNo"></span>. Enter the Transaction ID. Minimum Deposit: 50 Chips
                                Our payment number change regularly, Dont Save this no! <b>Use PAYTM only, No Google
                                    Pay, Phone Pe, Etc.</b>
                            </div>
                        </div>
                        <div class="input-field">
                            <input id="transactionid" type="text" class="validate">
                            <label for="transactionid">
                                Transaction ID
                            </label>
                            <div>
                                How to find transaction ID ? <a href="#">Click Here</a><br>
                                Paytm Bank Transactions ID also accepted.
                            </div>
                        </div>
                        <div class="input-field ">
                            <input id="amount" type="number" class="validate">
                            <label for="amount">
                                Amount
                            </label>
                            <div>
                                1 Rupee = 1 Chip <br>
                                Money will be credited on account immediately
                            </div>
                        </div>
                        <div class="submitButton center" style="padding-top: 5px;">
                            <a class="btn" onclick="Details()"> Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col l2"></div>
    </div>
</div>

@endsection