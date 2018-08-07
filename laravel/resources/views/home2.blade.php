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

    <!-- Icon Blocks -->
    <section class="container g-pt-100 g-pb-10">
        <!-- Heading -->
        <div class="row justify-content-center text-center g-mb-50">
            <div class="col-lg-9">
                <h1 class="h2 g-color-white g-font-weight-600 mb-2">Citizen Warfare</h1>
                <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
                <p class="lead mb-0">The Premier Tournament, and Bounty System for Star Citizen.</p>
            </div>
        </div>
        <!-- End Heading -->

        <div class="row">
            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="media g-mb-15">
                    <div class="d-flex mr-4">
              <span class="g-color-primary g-font-size-30">
                  <i class="icon-education-087 u-line-icon-pro"></i>
                </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-white g-font-weight-600 mb-20">Star Marine</h3>
                        <p class="g-color-gray-dark-v4">All game modes, maps, and team configurations supported!</p>
                        <!--<a class="g-color-main g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn More</a>-->
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="media g-mb-15">
                    <div class="d-flex mr-4">
              <span class="g-color-primary g-font-size-30">
                  <i class="icon-education-035 u-line-icon-pro"></i>
                </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-white g-font-weight-600 mb-20">Arena Commander</h3>
                        <p class="g-color-gray-dark-v4">Fly with your squad, or get a pick up squad, either way kick ass!</p>
                        <!--<a class="g-color-main g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn More</a>-->
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="media g-mb-15">
                    <div class="d-flex mr-4">
              <span class="g-color-primary g-font-size-30">
                  <i class="icon-education-141 u-line-icon-pro"></i>
                </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-white g-font-weight-600 mb-20">Bounty Hunting <small style="color: lightgrey">Coming Soon!</small></h3>
                        <p class="g-color-gray-dark-v4">Keep an eye on the bounty board, you can make some extra UEC, or just make sure you'r not on it.</p>
                        <!--<a class="g-color-main g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn More</a>-->
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </section>
    <!-- End Icon Blocks -->

    <!-- Video Intro -->
    <!--<section class="g-bg-secondary">
        <div class="container g-pt-100 g-pb-70">
            <div class="row justify-content-between">
                <div class="col-lg-5 g-mb-30">
                    <div class="mb-2">
                        <div class="d-inline-block g-width-30 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                        <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-12 text-uppercase"></span>
                    </div>
                    <h2 class="h1 g-color-black g-font-weight-600 g-mb-35">
                        Star <span class="g-color-primary">Marine</span>
                    </h2>

                    <!-- Carousel --
                    <div id="carouselCus1" class="js-carousel js-carousel_single-item-thumbs5__slides g-pb-35" data-infinite="true" data-fade="true" data-lazy-load="progressive" data-animation="linear" data-pagi-classes="u-carousel-indicators-v1 g-bottom-0">
                        <div class="js-slide">
                            <p class="g-font-style-italic g-font-size-17 mb-4">{Star Marine Description}<br><br> Got some footage of sick kills, or epic moments from Star Marine? let us know it could
                                get a spot light right here. <br><br><a href="mailto:spotlight@citizenwarfare.com">spotlight@citizenwarfare.com</a></p>
                        </div>

                        <div class="js-slide">
                            <p class="g-font-style-italic g-font-size-17 mb-4">I'm very impressed with the theme and customer support! Thanks</p>
                            <div class="media">
                                <img class="d-flex align-self-center g-brd-around g-brd-3 g-brd-white g-width-50 g-height-50 rounded-circle mr-3" data-lazy="assets/img-temp/100x100/img4.jpg" alt="Image Description">
                                <div class="media-body align-self-center">
                                    <h4 class="g-color-black g-font-weight-600 g-font-size-13 text-uppercase g-mb-0">Alisa Gomez</h4>
                                    <span class="d-block g-color-gray-dark-v4 g-font-size-12">HR, Airbnb Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Carousel
                </div>

                <div class="col-lg-6 g-mt-50 g-mb-30">
                    <!-- Article --
                    <article class="u-shadow-v21 u-shadow-v21--hover g-pos-rel g-bg-white g-transition-0_3 g-pa-10 rounded">
                        <img class="img-fluid w-100" src="assets/img/starmarine.jpg" alt="Image Description">
                        <div class="g-absolute-centered g-px-50 g-py-200">
                            <!--<a class="js-fancybox d-inline-block" href="javascript:;" data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1" data-speed="350" data-caption="Single Image">
                          <span class="u-icon-v3 g-bg-primary g-color-white g-bg-black--hover g-rounded-50x g-cursor-pointer">
                                <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                              </span>
                            </a>
                        </div>
                    </article>
                    <!-- End Article --
                </div>
            </div>
        </div>
    </section>-->
    <!-- End Video Intro -->

    <!-- Blog News -->
    <section class="container g-pt-50 g-pb-60">
        <!-- Heading -->
        <div class="row justify-content-center text-center g-mb-50">
            <div class="col-lg-9">
                <h2 class="h2 g-color-white g-font-weight-600 mb-2">Follow the Latest News</h2>
                <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
                <p class="lead mb-0">This is the lates about Star Citizen.</p>
            </div>
        </div>
        <!-- End Heading -->
        <div class="row">
            @foreach($data['feeddata'] as $post)
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Grid Overlap Blocks -->
                <article>
                    <img class="img-fluid w-100" src="{{ $post->rss_feedImage }}" alt="Image Description">
                    <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-5 mx-auto">
                        <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">{{ \Carbon\Carbon::parse($post->rss_pubDate,'D d, m Y') }}(</span>
                        <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                            <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">{{ $post->rss_title }}</a>
                        </h2>
                        <p class="g-color-gray-dark-v4 g-line-height-1_8">{{ $post->rss_contentExerpt }}</p>
                        <a class="g-font-size-13" href="{{ $post->rss_link }}" target="_blank">Read more...</a>
                    </div>
                </article>
                <!-- End Blog Grid Overlap Blocks -->
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Blog News -->

    <!-- Counter -->
    <!-- Video Block -->
    <section class="container-fluid px-0">
        <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall g-bg-cover g-bg-black-opacity-0_6--after" data-options="{direction: 'fromtop', animation_duration: 25, direction: 'reverse'}">
            <!-- Promo Block - Parallax Video -->
            <div class="dzsparallaxer--target" style="width: 100%; height: 200%;" data-forcewidth_ratio="1.77">
                <div class="js-bg-video g-pos-abs w-100 h-100" data-hs-bgv-type="youtube" data-hs-bgv-id="-yLTm8DZ8s4" data-hs-bgv-loop="1"></div>
            </div>
            <!-- End Promo Block - Parallax Video -->

            <div class="text-center g-pos-rel g-z-index-1 g-px-50 g-py-200">
                <a class="js-fancybox d-block mb-5" href="javascript:;" data-src="//www.youtube.com/embed/-yLTm8DZ8s4?autoplay=1" data-speed="350" data-caption="Single Image">
        <span class="u-icon-v3 u-icon-size--lg g-bg-white g-color-black g-color-primary--hover g-font-size-20 g-rounded-50x g-cursor-pointer">
            <i class="g-pos-rel g-left-2 fa fa-play"></i>
          </span>
                </a>
                <span class="d-block g-color-white g-font-size-20 text-uppercase g-letter-spacing-5">Watch</span>

            </div>
        </div>
    </section>
    <!-- End Video Block -->
    <!-- End Counter -->

    <!-- Icon Blocks -->
    <section class="container g-pt-100 g-pb-10">
        <!--
        <div class="row">
            <div class="col-md-6 text-md-right g-mb-40">
                <!-- Icon Blocks --
                <div class="media g-mb-40">
                    <div class="media-body mr-4">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Creative ideas</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                    <div class="d-flex">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle">
                <i class="icon-education-087 u-line-icon-pro"></i>
              </span>
                    </div>
                </div>
                <!-- End Icon Blocks --

                <!-- Icon Blocks --
                <div class="media g-mb-40">
                    <div class="media-body mr-4">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Excellent features</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                    <div class="d-flex">
              <span class="u-icon-v2 g-color-white g-bg-black rounded-circle">
                <i class="icon-education-035 u-line-icon-pro"></i>
              </span>
                    </div>
                </div>
                <!-- End Icon Blocks --

                <!-- Icon Blocks --
                <div class="media g-mb-40">
                    <div class="media-body mr-4">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Fully responsive</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                    <div class="d-flex">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle">
                <i class="icon-education-141 u-line-icon-pro"></i>
              </span>
                    </div>
                </div>
                <!-- End Icon Blocks --
            </div>

            <div class="col-md-6 g-mb-40">
                <!-- Icon Blocks --
                <div class="media g-mb-40">
                    <div class="d-flex mr-4">
              <span class="u-icon-v2 g-color-white g-bg-black rounded-circle">
                <i class="icon-finance-256 u-line-icon-pro"></i>
              </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Clean code</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                </div>
                <!-- End Icon Blocks --

                <!-- Icon Blocks --
                <div class="media g-mb-40">
                    <div class="d-flex mr-4">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle">
                <i class="icon-science-020 u-line-icon-pro"></i>
              </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Extensive documentation</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                </div>
                <!-- End Icon Blocks --

                <!-- Icon Blocks --
                <div class="media g-mb-40">
                    <div class="d-flex mr-4">
              <span class="u-icon-v2 g-color-white g-bg-black rounded-circle">
                <i class="icon-finance-009 u-line-icon-pro"></i>
              </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Modern design</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                </div>
                <!-- End Icon Blocks --
            </div>
        </div>
        -->
    </section>
    <!-- End Icon Blocks -->
    
    
@endsection