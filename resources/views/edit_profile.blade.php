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
                              <span class="card-title center" style="padding-top:50px;">Change Your Current Username And Password</span>
                                <form method="POST" action="{{ url('update-profile') }}" style="padding-top: 40px;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}" />
                                    <div class="input-field">
                                        <input id="username" name="name" type="text" class="validate" value="{{$user->name}}" required >
                                        <label for="username">
                                            Change Username
                                        </label>
                                    </div>
                                    <div class="input-field">
                                        <input id="password" name="password" type="password" class="validate" placeholder="********" required>
                                        <label  for="password">
                                            Change Password
                                        </label>
                                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="input-field ">
                                        <input id="cnfpassword" name="cnfpassword" type="password" class="validate"  placeholder="********" required>
                                        <label  for="password">
                                            Confirm Password
                                        </label>
                                        <span toggle="#cnfpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="submitButton center" style="padding-top: 30px;">
                                        <button type="submit" class = "btn" > Submit</button>
                                    </div>
                                </form>
                            </div>
                          </div>
                    </div>
                    <div class="col l2"></div>
                </div>
            </div>

@endsection