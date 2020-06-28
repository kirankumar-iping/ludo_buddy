<html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/js/socket.io.js"></script>
    <script src="https://kit.fontawesome.com/66d1ca8a34.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
    <link rel="stylesheet" href="{{asset('css/faq.css')}}" />
    <link rel="stylesheet" href="{{asset('css/t&c.css')}}" />
    <link rel="stylesheet" href="{{asset('css/wallet.css')}}" />
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js"></script>
    <style>
        .btn {
            border-radius: 10px;
        }

        .player1 {
            color: white;
            font-size: 20px;
            margin-top: 30px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .player2 {
            color: white;
            font-size: 20px;
            margin-bottom: 20px;
            margin-top: 50px;
            font-weight: bold;
        }

        .btn {
            border: 1px solid black !important;
            text-transform: none !important;
            border-radius: 10px;
            margin-top: 50px;
            background-color: #25D366;
            color: white;
        }
    </style>
</head>

<body>
    <div id="scrolling" class="scrolling-content">

        <!--start NAvbar-->
        <nav class="navbar">
            <div class="nav-wrapper " style="height: 150px;">
                <a class="brand-logo anchorLogo" href="{{url('home')}}"><img class="logo" alt="logo" src="{{asset('images/logo1.png')}}" style="color: white;"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <i class="material-icons icon">menu</i>
                </a>
                <ul class="right hide-on-med-and-down" style="padding-right: 203px; ">
                    <li><a class="listName" href="{{url('how-to-play')}}">How to Play</a></li>
                    <li><a class="listName" href="{{url('faqs')}}">FAQ'S</a></li>
                    <li><a class="listName" href="{{url('terms-and-conditions')}}">Terms and Conditions</a></li>
                    <li>
                        <a class='dropdown-trigger' data-target='dropdown1' style=" height: 47%; padding: 0;"><i class="material-icons icon1">person</i></a>
                        <ul id='dropdown1' class='dropdown-content'>
                            <li><a class="listName1" tabindex="-1" href="{{url('home')}}">Dashboard</a></li>
                            <li><a class="listName1" tabindex="-1" href="{{url('editprofile')}}">Edit Profile</a></li>
                            <li><a class="listName1" tabindex="-1" href="{{url('mymatches')}}">My Matches</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li><a class="listName1" tabindex="-1" href="{{url('buy-chips')}}">Buy Chips</a></li>
                            <li><a class="listName1" tabindex="-1" href="{{url('redeemchips')}}">Redeem Chips</a></li>
                            <li><a class="listName1" tabindex="-1" href="{{url('transaction')}}">Transaction</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li>
                                <a class="listName1" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                    {{ __('Sign Out') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo" style="z-index: 100000;">
            <li><a class="listName2" href="/dashboard">Dashboard</a></li>
            <li><a class="listName2" href="/user/edit-profile">Edit Profile</a></li>
            <li><a class="listName2" href="/user/matches">My Matches</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a class="listName2" href="/user/wallet/buy-chips">Buy Chips</a></li>
            <li><a class="listName2" href="/user/wallet/redeem-chips">Redeem Chips</a></li>
            <li><a class="listName2" href="/user/wallet/transaction">Transaction</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a class="listName2" href="{{url('how-to-play')}}">How to Play</a></li>
            <li><a class="listName2" href="/faqs">FAQ'S</a></li>
            <li><a class="listName2" href="/terms-and-conditions">Terms and Conditions</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a class="listName2" href="/">Sign Out</a></li>
        </ul>
        <!-- End of Navbar -->
        @yield('content')
        <!-- End Of Main Content -->
    </div>



    <!-- Footer -->
    <footer class="page-footer" style="background-color: transparent;">
        <div class="container">
            <div class="row">
                <div class="col s12">
                </div>
                <div class="col s12">
                </div>
            </div>
        </div>
        <div class="footer-copyright" style="background-color: #363e4c;">
            <div class="container">
                <div class="row" style="margin-bottom: 0;">
                    <table>
                        <tr style="border-bottom: 0;">
                            <td class="center" style="border-right: 1px solid white; width: 25% ">
                                <a href="/user/wallet/buy-chips">
                                    <span class="l3"><i class="fas fa-dice fa-lg" style="padding-bottom: 10px;"></i><br><span id="chips"> </span> Chips</span>
                                </a>
                            </td>
                            <td class="center" style="border-right: 1px solid white; width: 25% "><span class="l3" id="user"><i class="far fa-user fa-lg" style="padding-bottom: 10px;"></i><br></span>
                            </td>
                            <td class="center" style="width: 25% "><a class="center l3" href="/user/matches"><i class="fas fa-history fa-lg" style="padding-bottom: 10px;"></i><br>History</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('.dropdown-trigger').dropdown();
    });
</script>