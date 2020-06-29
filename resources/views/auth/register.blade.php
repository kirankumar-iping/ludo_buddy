<html>
    <head>
        <title>Register</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="/socket.io/socket.io.js"></script>
                <link rel = "stylesheet" href="../css/register.css"/>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col l6 m12 s12 center">
                        <img class="logo center" alt="logo" src="../images/logo2.png" style="color: white;">
                    </div>
                    <div class="col l6 m12 s12">
                        <div class="card card-login">
                            <div class="card-login-splash" width="310.6" height="371.11">
                                <div class="wrapper">
                                    <h3>Account</h3>
                                    <a class="btn" href="{{url('/')}}" style="margin-left:30px;">Sign In</a>
                                </div>
                                <img src="{{asset('/images/register.jpeg')}}">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Sign Up</span>
                                <form method="POST" action="{{ url('register') }}">
                                @csrf
                                    <div class="input-field">
                                        <input id="username" name="name" type="text" class="validate">
                                        <label for="username">
                                            Username
                                        </label>
                                    </div>

                                    <div class="input-field">
                                        <input id="mail" name="email" type="email" class="validate" >
                                        <label for="mail" id="mail">Email Id</label>
                                    </div>  

                                    <div class="input-field">
                                        <input id="phone-no" name="Phonenumber" type="number" class="validate">
                                        <label for="phone-no">
                                            Mobile Number
                                        </label>
                                    </div>
                                    <div class="input-field">
                                        <input id="password" name="password" type="password" class="validate">
                                        <label for="password">
                                            Password
                                        </label>
                                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="input-field ">
                                        <input id="cnfpassword" name="cnfpassword" type="password" class="validate">
                                        <label for="password">
                                            Confirm Password
                                        </label>
                                        <span toggle="#cnfpassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="input-field" id="otpfield">
                                        <input id="otp" type="number" class="validate">
                                        <label for="otp">
                                            OTP
                                        </label>
                                    </div>
                                <input type="hidden" name="roles" id="roles" value="Player" />
                                    <div class="submitButton" id="submitButton">
                                        <button type="submit" class="btn righ">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                    
                                    <div class="submitButton" id="submitButton1">
                                        <a class = "btn right" onclick="otpsubmitted()"> Submit</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script>
         $(document).ready(function(){
            document.getElementById("cnfpassword").onkeypress = function(event){
              if (event.keyCode == 13 || event.which == 13){
                  Details();
              }
            };
            document.getElementById("otp").onkeypress = function(event){
              if (event.keyCode == 13 || event.which == 13){
                  otpsubmitted();
              }
            };
          })
        function Details(){
            var name = document.getElementById("username").value;
            var mail = document.getElementById("mail").value;
            var phone = document.getElementById("phone-no").value;
            var password = document.getElementById("password").value;
            var confirm = document.getElementById("cnfpassword").value;
            var otp = document.getElementById("otp").value;

            if(name.length!=0 && mail.length!=0 && phone.length==10 && password.length!=0 && password===confirm)
            {
                document.getElementById("otpfield").style.display = "block";
                document.getElementById("submitButton").style.display = "none";
                document.getElementById("submitButton1").style.display = "block";
            }
            else    
            {
                alert("Please fill all the entries carefully!!");
                window.location.reload();
                document.getElementById("submitButton").style.display = "block";
                document.getElementById("submitButton1").style.display = "none";
            }
        }

        function otpsubmitted()
        {
            var otp = document.getElementById("otp").value;
            if(otp.length!=0)
            {
                alert("Signed Up Sucessfully");
                window.location.href="/";
            }
            else
            {
                alert("Please fill the OTP");
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