<html>

<head>
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/socket.io/socket.io.js"></script>
    <link rel="stylesheet" href="../css/forgetpassword.css" />
</head>

<body>
    <main>
        <div class="container">
            <div class="row" id="phonefield">
                <div class="col s12 center">
                    <img class="logo center" alt="logo" src="../images/logo2.png" style="color: white;">
                </div>
                <div class="col s12 ">
                    <div class="card card-login">
                        <div class="card-login-splash" width="310.6" height="371.11">
                            <div class="wrapper">
                                <h3 style="margin-left: 0%; margin-bottom: 0;">Recovering</h3>
                                <h3 style="margin-left: 13%; margin-top:0;">Account</h3>
                            </div>
                            <img src="../images/register.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Change Password</span>
                            <form>
                                <div class="input-field" style="margin-top:5rem;">
                                    <input id="phone-no" type="number" class="validate">
                                    <label for="phone-no">
                                        Mobile Number
                                    </label>
                                </div>
                                <div class="submitButton1">
                                    <a class="btn right" onclick="phnNosubmitted()">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row " id="otpfield">
                <div class="col s12 center">
                    <img class="logo center" alt="logo" src="../images/logo2.png" style="color: white;">
                </div>
                <div class="col s12">
                    <div class="card card-login ">
                        <div class="card-login-splash" width="310.6" height="371.11">
                            <div class="wrapper">
                                <h3 style="margin-left: 0%; margin-bottom: 0;">Recovering</h3>
                                <h3 style="margin-left: 13%; margin-top:0;">Account</h3>
                            </div>
                            <img src="../images/register.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Change Password</span>
                            <form style="margin-top:30px;">
                                <div class="input-field">
                                    <input disabled id="disabled" type="number" class="validate">
                                </div>
                                <div class="input-field ">
                                    <input id="otp" type="number" class="validate">
                                    <label for="otp">
                                        OTP
                                    </label>
                                </div>
                                <div class="submitButton2">
                                    <a class="btn right" onclick="otpsubmitted()">Verify</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row" id="passwordfield">
                <div class="col s12 center">
                    <img class="logo center" alt="logo" src="../images/logo2.png" style="color: white;">
                </div>
                <div class="col s12 ">
                    <div class="card card-login">
                        <div class="card-login-splash" width="310.6" height="371.11">
                            <div class="wrapper">
                                <h3 style="margin-left: 0%; margin-bottom: 0;">Recovering</h3>
                                <h3 style="margin-left: 13%; margin-top:0;">Account</h3>
                            </div>
                            <img src="../images/register.jpeg">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Change Password</span>
                            <form>
                                <div class="input-field">
                                    <input disabled id="disabled" type="number" class="validate">
                                </div>

                                <div class="input-field">
                                    <input id="password" type="password" class="validate">
                                    <label for="password">
                                        Password
                                    </label>
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="input-field ">
                                    <input id="cnfpassword" type="password" class="validate">
                                    <label for="password">
                                        Confirm Password
                                    </label>
                                    <span toggle="#cnfpassword"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>

                                <div class="submitButton3">
                                    <a class="btn right" onclick="pwdsubmitted()">Submit</a>
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
            document.getElementById("otp").onkeypress = function(event){
              if (event.keyCode == 13 || event.which == 13){
                  otpsubmitted();
              }
            };
            document.getElementById("cnfpassword").onkeypress = function(event){
              if (event.keyCode == 13 || event.which == 13){
                  pwdsubmitted();
              }
            };
          })

        function phnNosubmitted(){
            var phone = document.getElementById("phone-no").value;
            if(phone.length==10)
            {
                document.getElementById("otpfield").style.display="block";
                document.getElementById("phonefield").style.display="none";
                document.getElementById("passwordfield").style.display="none";
                $("input:disabled").val(phone);
            }
            else
            {    alert("Please Fill the Valid Number");
                window.location.reload();
            }
        }

        function otpsubmitted()
        {
            var otp = document.getElementById("otp").value;
            if(otp.length!=0)
            {
                document.getElementById("otpfield").style.display="none";
                document.getElementById("phonefield").style.display="none";
                document.getElementById("passwordfield").style.display="block";
            }
            else
            {
                alert("Please Enter OTP");
            }
        }

        function pwdsubmitted(){
            var password = document.getElementById("password").value;
            var confirm = document.getElementById("cnfpassword").value;
            if(password === confirm)
            {
                alert("Password Changed Successfully\nPress Ok to continue...");
                window.location.href = "/";
            }
            else
            {
                alert("Rewrite The Password!!");
                document.getElementById("password").value='';
                document.getElementById("cnfpassword").value='';
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