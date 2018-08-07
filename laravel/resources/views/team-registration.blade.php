@extends('layouts.master')

@section('content')
    <!-- Promo Block -->
    <section class="g-bg-cover g-bg-pos-center g-bg-img-hero g-bg-black-opacity-0_3--after g-flex-centered g-py-150 short" style="background-image: url('assets/images/ollisar.jpg');">
        <div class="container g-bg-cover__inner">
            <div class="row">
                <div class="col-md-5 align-self-center g-overflow-hidden g-mb-30 g-mb-0--md">
                    <!-- Promo Block Content -->
                    <h2 class="g-color-white g-font-size-30 g-font-size-45--md text-uppercase g-line-height-1 g-mb-5" data-animation="fadeInUp" data-animation-delay="200" data-animation-duration="1500">Citizen</h2>
                    <h3 class="g-color-primary g-font-weight-700 g-font-size-40 g-font-size-60--md text-uppercase g-line-height-1 g-mb-20" data-animation="fadeInLeft" data-animation-delay="500" data-animation-duration="2000">Warfare</h3>
                    <p class="g-color-white-opacity-0_8 g-font-size-28 g-mb-15" data-animation="fadeInUp" data-animation-delay="1100" data-animation-duration="1500">The Premiere Star Citizen Tournament System</p>
                    <div data-animation="fadeInRight" data-animation-delay="1400" data-animation-duration="1500">
                        <p class="g-color-white-opacity-0_8 g-font-size-18 g-mb-20 g-mb-0--md">Show us your video's and you could get a spotlight right here!</p>
                    </div>
                    <!-- End Promo Block Content -->
                </div>

                <div class="col-md-7 g-overflow-hidden">
                    <div class="g-brd-around g-brd-7 g-brd-white" data-animation="fadeInRight" data-animation-delay="1700" data-animation-duration="1500">
                        <!-- Promo Block - Video -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="js-video-audio u-video-v1 mb-0" poster="" preload data-plyr='{"controls" : ["play-large"]}'>
                                <source src="/assets/video/background-video-720-2.webm" type="video/mp4;">
                            </video>
                        </div>
                        <!-- End Promo Block - Video -->

                        <!-- Promo Block - Info -->
                        <ul class="u-video-v1-info">
                            <li class="u-video-v1-info__item">
                                <a href="#!" target="_blank">View test video</a> &copy; Test Director
                            </li>
                            <li class="u-video-v1-info__item">
                                <a href="#!" target="_blank">Test Director &ndash; &ldquo;test video&rdquo;</a> &copy; Test Director
                            </li>
                            <li class="u-video-v1-info__item">
                                <a href="#!" target="_blank"> View test video</a> on <i class="fa fa-youtube"></i> Youtube
                            </li>
                        </ul>
                        <!-- End Promo Block - Info -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Promo Block -->
    <!-- Signup -->
    <section class="container g-py-100">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-6">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <div class="text-center mb-4">
                        <h2 class="h2 g-color-white g-font-weight-600">Create Team</h2>
                    </div>
                    {{ Form::open(['url'=>'/team-registration', 'method'=>'post']) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('team_name', 'Team Name:') }}
                        {{ Form::text('team_name', old('team_name'), ['class'=>'form-control','placeholder'=>'Team Name', 'required']) }}
                    </div>
                    <div class="form-group ">
                        {{ Form::label('team_website', 'Team Website') }}
                        {{ Form::text('team_website', old('team_website'), ['class'=>'form-control', 'id'=>'team_website','placeholder'=>'Team Web Site']) }}
                    </div>
                    <div class="form-group">
                        <hr>
                    </div>
                    <div class="row">
                        {{ Form::submit('Create Team',['class'=>'btn btn-success form-control', 'style'=>'color:#ffffff;']) }}
                    </div>
                    @include('shared.errors')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@endsection