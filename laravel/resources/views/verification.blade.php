@extends('master')

@section('content')
    <header id="first" style="height: 30%">
        <div class="header-content" style="height: 30%">
            <div class="inner">
                <h1 class="cursive">Citizen Warfare</h1>
                <h4>The Premier Tournament System for Star Citizen.</h4>
                <hr>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row" style="padding-top: 50px;">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Verified</div>
                    <div class="panel-body">
                        <div class="text-center">
                            Thank you for Activating your account, {{ $user->username }}
                            <br><br>
                            You may now Join or Create a Team!
                            <div class="text-center">GLHF</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection