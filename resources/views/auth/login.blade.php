<html>

<head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/socket.io/socket.io.js"></script>
    <link rel="stylesheet" href="../css/login.css" />
</head>

<form method="POST" action="{{ route('login') }}">
    {{csrf_field()}}

    <body>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col s12 center">
                        <img class="logo center" alt="logo" src="{{asset('images/logo2.png')}}" style="color: white;">
                    </div>
                    <div class="col s12">
                        <div class="card card-login">
                            <div class="card-login-splash" width="310.6" height="371.11">
                                <div class="wrapper">
                                    <h3>Account</h3>
                                    <a class="btn" href="/sign-up" style="margin-left:30px;">Sign Up</a>
                                </div>
                                <img src="../images/register.jpeg">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Sign In</span>
                                <form>
                                    <div class="input-field">
                                        <label for="email" class="validate">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-field">
                                        <label for="password" class="validate">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <script>
            $(document).ready(function(){
            document.getElementById("password").onkeypress = function(event){
              if (event.keyCode == 13 || event.which == 13){
                  credentials();
              }
            };
          })
        function credentials(){
            var phone = document.getElementById("phone-no").value;
            var password = document.getElementById("password").value;

            if(phone.length==10 && password.length!=0 )
            {
                document.getElementById("phone-no").value = '';
                document.getElementById("password").value = '';
                window.location.href = "/createlobby";
            }
            else    
            {
                alert("Please fill all the entries carefully!!");
                window.location.reload();
            }
        }
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
            input.attr("type", "text");
            } else {
            input.attr("type", "password");
            }
        });
        </script>

</html>