@extends('layouts.app')

@section('content')
<div class="container">
                <div class="row maincontent">
                    <div class="col l6 m12 s12">
                        <div class="card medium white">
                            <div class="card-content black-text">
                              <span class="card-title">Winning Matches</span>
                              <table>
                                <tr>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                                <tr>
                                    <td id="winningamt"></td>
                                    <td id="dateofwinmatch"></td>
                                </tr>
                            </table>
                            </div>
                          </div>
                    </div>
                    <div class="col l6 m12 s12">
                        <div class="card medium white">
                            <div class="card-content black-text">
                              <span class="card-title">Lossing Matches</span>
                              <table>
                                <tr>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                                <tr>
                                    <td id="lossingamt"></td>
                                    <td id="dateoflossmatch"></td>
                                </tr>
                            </table>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
@endsection