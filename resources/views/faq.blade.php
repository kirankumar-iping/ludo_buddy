@extends('layouts.app')

@section('content')
<div class="container">
                    <div class="row maincontent">
                        <div class="col s12 center header" >
                            Support Channels
                        </div>
                        <div>
                            <div class="col s4 center contacticons"><a href="#" style="color: #25D366;"><i class="fab fa-whatsapp fa-4x"></i></a></div>
                            <div class="col s4 center contacticons"><a href="#" style="color: #0088cc ;"><i class="fab fa-telegram-plane fa-4x"></i></a></div>
                            <div class="col s4 center contacticons"><a href="#" style="color: #D44638;"><i class="fas fa-envelope fa-4x"></i></a></div>
                        </div>
                        
                        <div>
                            <br><br>
                            <div class="question" id="firstques" >1. How to play?</div>
                            <div class="answer">Ans. <a href="/how-to-play">Click Here</a>, to watch 1 min video of how to play in Ludo Buddy</div>
                            <div class="question">2. Transaction ID showing Invalid?</div>
                            <div class="answer">Ans. Don't worry, please send your transaction screenshot to our chat support or email. We will add the chips in your Ludo Buddy account. Please mention your registered mobile number in email.</div>
                            <div class="question">3. Match on hold?</div>
                            <div class="answer">Ans. We periodically check and release the games which are on hold. If your match is on hold, Dont worry it will be released within 30 mins.</div>
                            <div class="question">4. Wrong Match result updated?</div>
                            <div class="answer">Ans. Send us winning screenshot of the game via chat support or email. We will check and award you win if result is posted wrong.</div>
                            <div class="question">5. Any other query?</div>
                            <div class="answer">Ans. Your query will be solved in within 12 hours. You can contact us via different support channels given above.</div>
                        </div>
                    </div>
                </div>
@endsection