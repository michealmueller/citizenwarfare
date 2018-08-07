<!--
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/17/2018
 * Time: 11:07 AM
 */
-->
@extends('layouts.master')

@section('content')
    <!-- Promo Block -->
    <section class="g-bg-cover g-bg-pos-center g-bg-img-hero g-bg-black-opacity-0_3--after g-flex-centered g-py-150" style="background-image: url('assets/images/ollisar.jpg');">
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
    <section class="g-py-100 g-px-150--md">
        <div class="row">
            <div class="col-md-3 g-mb-30"></div>
            <div class="col-md-3 g-mb-30">
                <!-- Article -->
                <article class="text-center g-bg-white g-color-gray-dark-v5 g-brd-bottom g-brd-3 g-brd-white g-brd-primary--hover g-transition-0_3">
                    <!-- Article Header -->
                    <header class="g-bg-primary-dark-v2 g-color-white g-pa-40">
                        <!-- Article Title -->
                        <h4 class="h6 text-uppercase g-font-weight-600 g-mb-15">Freelancer Package</h4>
                        <!-- End Article Title -->

                        <div class="g-font-size-36 g-line-height-1_2">
                            Free <em class="d-block g-font-style-normal g-font-size-default g-mt-5">Current Plan</em>
                        </div>
                    </header>
                    <!-- End Article Header -->

                    <!-- Article Content -->
                    <div class="g-px-35 g-py-40">
                        <ul class="text-uppercase list-unstyled g-mb-30">
                            <li class="g-mb-20">Create A Team<small> *</small></li>
                            <li class="g-mb-20">Create A Tournament<small >*</small></li>
                            <li class="g-mb-20">Forums Access</li>
                            <li class="g-mb-20">Membership of 1 team</li>
                            <li class="g-mb-20">Access to Bounty Board</li>
                            <li class="g-mb-20">&nbsp;</li>
                        </ul>

                        <a class="btn text-uppercase u-btn-primary g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30" href="#!">Order Now</a>
                    </div>
                    <!-- End Article Content -->
                </article>
                <!-- End Article -->
            </div>

            <div class="col-md-3 g-mb-30">
                <!-- Article -->
                <article class="text-center g-bg-white g-color-gray-dark-v5 g-brd-bottom g-brd-3 g-brd-white g-brd-primary--hover g-transition-0_3">
                    <!-- Article Header -->
                    <header class="g-bg-primary-dark-v2 g-color-white g-pa-40">
                        <!-- Article Title -->
                        <h4 class="h6 text-uppercase g-font-weight-600 g-mb-15">Organization Package</h4>
                        <!-- End Article Title -->

                        <div class="g-font-size-36 g-line-height-1_2">
                            $2.99 <em class="d-block g-font-style-normal g-font-size-default g-mt-5">per month</em>
                        </div>
                    </header>
                    <!-- End Article Header -->

                    <!-- Article Content -->
                    <div class="g-px-35 g-py-40">
                        <ul class="text-uppercase list-unstyled g-mb-30">
                            <li class="g-mb-20"><b>Everything from Basic - Plus</b></li>
                            <li class="g-mb-20">Subscriber forums access</li>
                            <li class="g-mb-20">Membership of up to 3 teams</li>
                            <li class="g-mb-20">Unlimited Team members</li>
                            <li class="g-mb-20">Tournaments with unlimited teams</li>
                            <li class="g-mb-20">&nbsp;</li>
                        </ul>

                        <a class="btn text-uppercase u-btn-primary g-rounded-50 g-font-size-12 g-font-weight-700 g-pa-15-30" href="#!">Order Now</a>
                    </div>
                    <!-- End Article Content -->
                </article>
                <!-- End Article -->
            </div>
            <div class="col-md-3 g-mb-30"></div>
        </div>

    </section>



@endsection