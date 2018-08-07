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
                        <h2 class="h2 g-color-white g-font-weight-600">Signup</h2>
                    </div>
                    @include('shared.errors')
                    <!-- Form -->
                    <form class="g-py-15" method="post">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <div class="input-group">
                                <input class="form-control text-center" name="username" type="text" placeholder="Username">
                            </div>
                        </div>


                        <div class="mb-4">
                            <div class="input-group">
                                <input class="form-control text-center " name="email" type="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-4">
                                <div class="input-group">
                                    <input class="form-control text-center " name="password" type="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 mb-4">
                                <div class="input-group">
                                    <input class="form-control text-center" name="password_confirmation" type="password" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox" name="terms" value="1">
                                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                    <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                                </div>
                                <small>I accept the <a href="/terms" target="_blank">Terms and Conditions</a></small>
                            </label>
                        </div>

                        <button class="btn btn-md btn-block u-btn-primary rounded-0 g-py-15 mb-5" type="submit">Signup</button>

                        <div class="d-flex justify-content-center text-center g-mb-30">
                            <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                            <span class="align-self-center g-color-gray-dark-v3 mx-4">OR</span>
                            <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                        </div>

                        <!-- Form Social Icons -->
                        <ul class="list-inline text-center mb-4">
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-facebook rounded-circle" href="/auth/facebook">
                                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-twitter rounded-circle" href="/auth/twitter">
                                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-google-plus rounded-circle" href="/auth/google">
                                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Form Social Icons -->
                    </form>
                    <!-- End Form -->

                    <footer class="text-center">
                        <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Already have an account? <a class="g-font-weight-600" href="{{ route('login') }}">Signin</a>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <!-- End Signup -->
@endsection
