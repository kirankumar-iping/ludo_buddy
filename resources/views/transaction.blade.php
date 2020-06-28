@extends('layouts.app')

@section('content')

<div id="havingtrns" >
                <div class="container">
                    <div class="row maincontent">
                        <div class="col l2"></div>
                        <div class="col l8 m12 s12">
                            <div class="card medium white">
                                <div class="card-content black-text">
                                  <span class="card-title center" style="padding-top:20px;">Current Balance</span>
                                  <div id ="amount" class="center"></div>
                                  <div class="center" style="font-size: 20px;">Chips</div>
                                <br>
                                <table>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Date</th>
                                    </tr>
                                    <tr>
                                        <td id="amountoftransaction"></td>
                                        <td id="dateoftransaction"></td>
                                    </tr>
                                </table>
                                </div>
                                
                              </div>
                        </div>
                        <div class="col l2"></div>
                    </div>
                    
    
                </div>
            </div>
            <!-- End Main Content -->    

          <!-- Main Content -->
          <div id="newuser">
            <div class="container">
                <div class="row maincontent">
                    <div class="col l2"></div>
                    <div class="col l8 m12 s12">
                        <div class="card small white">
                            <div class="card-content black-text">
                              <span class="card-title center" style="padding-top:50px;">Current Balance</span>
                              <div class="center" style="font-size: 40px;">0</div>
                              <div class="center" style="font-size: 20px;">Chips</div>
                            </div>
                          </div>
                    </div>
                    <div class="col l2"></div>
                </div>
            </div>
          </div>
@endsection