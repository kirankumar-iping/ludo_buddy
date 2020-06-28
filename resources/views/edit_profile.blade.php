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
                    <span class="card-title center" style="padding-top:50px;">Change Your Current Username And
                        Password</span>
                    <form style="padding-top: 40px;">
                        <div class="input-field">
                            <input id="username" type="text" class="validate">
                            <label for="username">
                                Change Username
                            </label>
                        </div>
                        <div class="input-field">
                            <input id="password" type="password" class="validate">
                            <label for="password">
                                Change Password
                            </label>
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="input-field ">
                            <input id="cnfpassword" type="password" class="validate">
                            <label for="password">
                                Confirm Password
                            </label>
                            <span toggle="#cnfpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="submitButton center" style="padding-top: 30px;">
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