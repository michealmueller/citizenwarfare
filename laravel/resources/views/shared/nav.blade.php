<header id="js-header" class="u-header u-header--abs-top u-header--show-hide u-header--change-appearance u-header--untransitioned" data-header-fix-moment="100" data-header-fix-effect="slide">
    <div class="u-header__section u-header__section--dark g-transition-0_3 g-py-5 g-bg-black-opacity-0_7" data-header-fix-moment-exclude="g-bg-black-opacity-0_7" data-header-fix-moment-classes="g-bg-black">
        <nav class="navbar navbar-expand-lg no-gutters g-pa-0">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0"
                        type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
                </button>
                <!-- End Responsive Toggle Button -->
                <!-- Logo -->
                <a class="navbar-brand text-uppercase" href="/">Citizen <span class="g-color-primary">Warfare</span></a>
                <!-- End Logo -->

                <!-- Navigation --
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--sm" id="navBar">
                    <ul class="navbar-nav text-uppercase g-font-weight-600 mx-auto">
                        <li class="nav-item g-mx-25--lg">
                            <a href="#!" class="nav-link px-0">Home

                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg">
                            <a href="#!" class="nav-link px-0">Features

                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg active">
                            <a href="#!" class="nav-link px-0">Shortcodes
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg">
                            <a href="#!" class="nav-link px-0">Pages

                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg">
                            <a href="#!" class="nav-link px-0">Demos

                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg g-mr-0--lg">
                            <a href="#!" class="nav-link px-0">What's New

                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->

                @if(Auth::check())
                <div class="d-inline-block g-pos-rel g-valign-middle g-ml-30 g-ml-0--lg">

                    <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                        <div class="g-pos-rel g-px-10--lg">
                            <a id="profileMenuInvoker" class="d-block" href="#!" data-dropdown-event="hover" data-dropdown-target="#profileMenu"
                               data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeIn"
                               data-dropdown-animation-out="fadeOut">

                                @if(Auth::check())
                                <span class="g-pos-rel">
                                    <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-lightblue-v5 g-mr-5"></span>
                                    <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm" src="{{ $data['user']->avatar }}" alt="">
                                </span>

                                <span class="g-pos-rel g-top-2">
                                    <span class="g-hidden-sm-down">{{ $data['user']->username }}</span>
                                    <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                                </span>
                                @endif
                            </a>

                            <!-- Top User Menu -->
                            <ul id="profileMenu" class="g-pos-abs g-left-20 g-width-100x--md g-nowrap g-font-size-12 g-py-20
                            g-mt-17 rounded u-dropdown--css-animation u-dropdown--hidden" aria-labelledby="profileMenuInvoker"
                                style="animation-duration: 300ms; left: 0px;background-color: #000000">

                                <li class="g-mb-10">
                                    <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="/profile">
                                        <span class="d-flex align-self-center g-mr-12">
                                            <i class="hs-admin-user"></i>
                                        </span>
                                        <span class="media-body align-self-center">My Profile</span>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="/upgrade">
                                        <span class="d-flex align-self-center g-mr-12">
                                            <i class="hs-admin-rocket"></i>
                                        </span>
                                        <span class="media-body align-self-center">Upgrade Plan</span>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="/team-registration">
                                            <span class="d-flex align-self-center g-mr-12">
                                                <i class="far fa-users"></i>
                                            </span>
                                        <span class="media-body align-self-center">My Team</span>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="media g-color-lightred-v2--hover g-py-5 g-px-20"
                                       @if($data['user']->team_id === null)
                                            href="/team-registration"
                                       @else
                                            href="/team-control"
                                        @endif
                                    >
                                            <span class="d-flex align-self-center g-mr-12">
                                                <i class="icon-trophy"></i>
                                            </span>
                                        <span class="media-body align-self-center">My Tournaments</span>
                                    </a>
                                </li>
                                <li class="g-mb-10">
                                    <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="{{ route('logout') }}">
                                                    <span class="d-flex align-self-center g-mr-12">
                                                        <i class="hs-admin-shift-right"></i>
                                                    </span>
                                        <span class="media-body align-self-center">Sign Out</span>
                                    </a>
                                </li>

                            </ul>
                            <!-- End Top User Menu -->
                        </div>
                    </div>
                </div>
                @else
                    <ul class="navbar-nav text-uppercase g-font-weight-600 mx-auto">
                        <li class="nav-item g-mx-25--lg">

                            <a class="nav-link media g-color-lightred-v2--hover g-py-5 g-px-20" href="{{ route('login') }}">
                                                <span class="d-flex align-self-center g-mr-12">
                                                    <i class="hs-admin-shift-right"></i>
                                                </span>
                                <span class="media-body align-self-center">Login</span>
                            </a>
                        </li>
                        <li class="nav-item g-mx-25--lg">
                            <a class="nav-link media g-color-lightred-v2--hover g-py-5 g-px-20" href="{{ route('register') }}">
                                            <span class="d-flex align-self-center g-mr-12">

                                            </span>
                                <span class="media-body align-self-center">Register</span>
                            </a>
                        </li>
                    </ul>
                @endif
                <!-- End Search -->
            </div>
        </nav>
    </div>
</header>

