<!-- Footer -->
<footer>
    <div id="contacts-section" class=" g-color-white-opacity-0_8 g-pa-25">
        <div class="container">
            <div class="row">

                <!-- Footer Content -->
                <div class="col-lg-3">
                    @if(Route::getCurrentRoute()->getname() != 'login' || Route::getCurrentRoute()->getname() != 'register' )
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Latest</h2>
                    </div>
                    @foreach($data['feeddata'] as $rssItem)
                    <article>
                        <h3 class="h6 g-mb-2">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="({ $rssItem->rss_link }}" target="_blank">{{ $rssItem->rss_title }}</a>
                        </h3>
                        <div class="small g-color-white-opacity-0_6">{{ $rssItem->rss_pubDate }}</div>
                    </article>
                    @endforeach
                    @endif
                </div>
                <!-- End Footer Content -->

                <!-- Footer Content -->
                <div class="col-lg-3 ">
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Useful Links</h2>
                    </div>

                    <nav class="text-uppercase1">
                        <ul class="list-unstyled g-mt-minus-10 mb-0">
                            <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">INN</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">RSI</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Omega Corp</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <!--<li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!"></a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <li class="g-pos-rel g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Contact Us</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>-->
                        </ul>
                    </nav>
                </div>
                <!-- End Footer Content -->

                <!-- Footer Content -->
                <div class="col-lg-3">
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Our Contacts</h2>
                    </div>

                    <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(assets/maps/map2.png);">
                        <!-- Location -->
                        <div class="d-flex g-mb-20">
                            <div class="g-mr-10">

                            </div>
                            <p class="mb-0"><br></p>
                        </div>
                        <!-- End Location -->

                        <!-- Phone -->
                        <div class="d-flex g-mb-20">
                            <div class="g-mr-10">
                            </div>
                            <p class="mb-0"></p>
                        </div>
                        <!-- End Phone -->

                        <!-- Email and Website -->
                        <div class="d-flex g-mb-20">
                            <div class="g-mr-10">
                              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                                <i class="fa fa-globe"></i>
                              </span>
                            </div>
                            <p class="mb-0">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="mailto:support@citizenwarfare.com">support@citizenwarfare.com</a>
                                <br>
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="https://muellertek.com">www.Muellertek.com</a>
                            </p>
                        </div>
                        <!-- End Email and Website -->
                    </address>
                </div>

                <!-- End Footer Content -->
                <div class="col-lg-3">
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Subscribe</h2>
                    </div>
                        <form class="g-mt-25" action="/newsletter" method="post">
                            <div class="row">
                                <div class="col-md-8 col-lg-12">
                                    <div class="form-group g-mb-20">
                                        <input class="input-sm form-control g-color-white g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_1 g-brd-primary--focus "
                                               type="text" placeholder="Your Name">
                                    </div>
                                    <div class="form-group g-mb-20">
                                        <input class="input-sm form-control g-color-white g-bg-transparent g-bg-transparent--focus g-brd-white-opacity-0_1 g-brd-primary--focus "
                                               type="email" placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-12">
                                    <button class="btn btn-sm u-btn-primary rounded " type="submit" role="button">Subscribe</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                <div class="d-lg-flex">
                    <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">Citizen Warfare 2018 © All Rights Reserved.</small>
                    <ul class="u-list-inline">
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="/privacy">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="/terms">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>
                        <!--<li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">License</a>
                        </li>
                        <li class="list-inline-item">
                            <span>|</span>
                        </li>-->
                        <li class="list-inline-item">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="/faq">Support</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 align-self-center">
                <ul class="list-inline text-center text-md-right mb-0">
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
                        <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                    <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>