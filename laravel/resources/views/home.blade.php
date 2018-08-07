@extends('layouts.master')

@section('content')
    <!-- Header Carousel -->

    <header id="first" class="">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Citizen Warfare</h1>
                <h4>The Premier Tournament System for Star Citizen.</h4>
                <hr>
                <div class="button">
                    <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-xs btn-sm">Toggle Video</a> &nbsp;
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="/getstarted" class="btn btn-lg btn-primary">
                                <div class="">Get Started</div>
                            </a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <video muted autoplay="" loop="" class="fillWidth fadeIn wow collapse show in" data-wow-delay="0.5s" poster="assets/images/ollisar.jpg" id="video-background">
                <source id='video' src='/assets/video/background-video-720-2.webm' type='video/webm'>
                <source id='video' src='/assets/video/background-vid.mp4' type='video/mp4'>
            </video>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Citizen Warfare <small>Current News</small>
                </h1>
            </div>
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class=" panel-heading ">
                        <h4><i class="fa fa-fw fa-check"></i>{{ $post->title }}</h4>
                    </div>
                    <div class="panel-body">
                        {{ $post->excerpt }}
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
            @endforeach
        <!-- /.row -->

        <!-- Open Tournaments-->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Open Tournaments</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Recent Tournaments-->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Recent Tournaments</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a class="linkhover" href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover" ></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Citizen Warfare Features</h2>
            </div>
            <div class="col-md-6">
                <p>We at Citizen Warfare want to give you all
                    the tools you need to effectively run your tournament, Be it Star Marine or Arena Commander.
                    Our System is designed around Star Citizen's game mechanics.</p>
                <ul>
                    <li>Supports Star Marine</li>
                    <li>Supports Arena Commander</li>
                    <li>The only Star Citizen dedicated Tournament System</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" width="80%" src="assets/images/SC3.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well ">
            <div class="row">
                <div class="col-md-8">
                    <p>To get started visit our Getting Started page, this page will walk you through getting registered
                        and how to create your first tournament.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn-block SCButton" href="#"><div class="textplacing">Get Started Now!</div></a>
                </div>
            </div>
        </div>

        <hr>
        </div>
    </div>
@endsection
