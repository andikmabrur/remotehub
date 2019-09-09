@extends('layouts.app-template-events')

@section('content')

<!-- Rawes events -->
<div class="jumbotron jumbotron-fluid rawes-events">
    <h1 class="display-4">Rabu weekly sharing</h1>
    <div class="container">
        <div class="container">
        <div class="row">
            <div class="col">
            <img src="assets/img/rawes-speaker/1.jpeg" alt="..." class="img-thumbnail rawes-speaker-img">
            </div>
            <div class="col speaker-name">
            <h4>Wisang</h4>
            <h3>"Intro to data science."</h3>
            <h2>17 July 2019<span style="font-weight: 300; margin-left: 15px;">20:00 - 23:00 WIB</span></h2>
            </div>
        </div>
        <h4 class="rawesdesc">Rawes is a free online talkshow at KKR 021 WhatsApp Group by RemoteHUB.asia . Held every Wednesday, 20:00 - 23:00 WIB.
We are welcoming you who may interest to be the speaker. Or just want to join the discussions? Kindly click the button below :)</h4>
        <div class="row">
            <div class="btn-rawes-container">
            <button type="button" data-toggle="modal" data-target="#JoinrawesModal" class="btn btn-rawes hovers">Join rawes</button>
            <button type="button" data-toggle="modal" data-target="#AskModal" class="btn btn-rawes hovers">Ask a question</button>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- End of rawes -->

    <!-- Rawes events -->
<div class="jumbotron jumbotron-fluid rawes-events">
        <h1 class="display-4">Rabu weekly sharing</h1>
        <div class="container">
            <div class="container">
            <div class="row">
                <div class="col">
                <img src="assets/img/rawes-speaker/1.jpeg" alt="..." class="img-thumbnail rawes-speaker-img">
                </div>
                <div class="col speaker-name">
                <h4>Wisang</h4>
                <h3>"Intro to data science."</h3>
                <h2>17 July 2019<span style="font-weight: 300; margin-left: 15px;">20:00 - 23:00 WIB</span></h2>
                </div>
            </div>
            <h4 class="rawesdesc">Rawes is a free online talkshow at KKR 021 WhatsApp Group by RemoteHUB.asia . Held every Wednesday, 20:00 - 23:00 WIB.
    We are welcoming you who may interest to be the speaker. Or just want to join the discussions? Kindly click the button below :)</h4>
            <div class="row">
                <div class="btn-rawes-container">
                <button type="button" data-toggle="modal" data-target="#JoinrawesModal" class="btn btn-rawes hovers">Join rawes</button>
                <button type="button" data-toggle="modal" data-target="#AskModal" class="btn btn-rawes hovers">Ask a question</button>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- End of rawes -->

    <!-- Modal -->
    <div class="modal fade ask-modal" id="AskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body question-modal">
            <h4>Enter the code below on the next page to start asking.</h4>
            <hr>
            <h3>#rawes29</h3>
        </div>
        <div class="modal-footer">
            <a href="https://www.sli.do/" class="btn btn-rawes modalrawes-btn">I understand</a>
        </div>
        </div>
    </div>
    </div>
    <div class="modal fade join-modal" id="JoinrawesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body question-modal">
            <h4>What do you want to join</h4>
        </div>
        <div class="modal-footer">
            <a href="https://api.whatsapp.com/send?phone=6281281359070&text=&source=&data=" class="btn btn-rawes modalrawes-btn">Be a member</a>
            <a href="http://bit.ly/contrib-at-rawes" class="btn btn-rawes modalrawes-btn">Be a speaker</a>
        </div>
        </div>
    </div>
</div>

@endsection