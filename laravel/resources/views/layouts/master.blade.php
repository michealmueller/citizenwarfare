<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Citizen Warfare, The Premier Star Citizen Tournament Site.">
    <meta name="author" content="MuellerTek">

    <title>Citizen Warfare - The Premier Star Citizen Tournament System</title>

    <link rel="shortcut icon" href="assets/favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="vendor/icon-hs/style.css">
    <link rel="stylesheet" href="vendor/animate.css">
    <link rel="stylesheet" href="vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="vendor/hs-admin-icons/hs-admin-icons.css">
    <link rel="stylesheet" href="vendor/hs-bg-video/hs-bg-video.css">
    <link rel="stylesheet" href="vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="vendor/plyr/dist/plyr.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">
    <link rel="stylesheet" href="assets/css/admin/unify-admin.css">

    <!-- Custom CSS -->
    <link href="assets/css/modern-business.css" rel="stylesheet">
    <link href="assets/css/custom.min.css" rel="stylesheet">

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>


    <!-- Chatter CSS -->
    @yield('css')
</head>
<body>
    <main>
        @include('shared.nav')
        @yield('content')
        @include('shared.footer')
    </main>



    <!-- JS Implementing Plugins -->
    <script src="/assets/js/dropzone.min.js"></script>
    <script src="vendor/appear.js"></script>
    <script src="vendor/slick-carousel/slick/slick.js"></script>
    <script src="vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
    <script src="vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
    <script src="vendor/hs-bg-video/hs-bg-video.js"></script>
    <script src="vendor/hs-bg-video/vendor/player.min.js"></script>
    <script src="vendor/fancybox/jquery.fancybox.min.js"></script>
    <script src="vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/helpers/hs.bg-video.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/hs.tabs.js"></script>
    <script src="assets/js/components/hs.popup.js"></script>
    <script src="assets/js/components/hs.counter.js"></script>
    <script src="assets/js/components/hs.cubeportfolio.js"></script>
    <script src="assets/js/components/hs.dropdown.js"></script>
    <script src="assets/js/components/hs.scrollbar.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>
    <script src="assets/js/components/hs.onscroll-animation.js"></script>
    <script src="assets/js/components/hs.video-audio.js"></script>
    <script src="vendor/plyr/dist/plyr.js"></script>
    <script src="vendor/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>


    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {


            // initialization of scroll animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

            // initialization of custom video
            $.HSCore.components.HSVideoAudio.init('.js-video-audio');

            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of counters
            var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});
        });

        $(window).on('load', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });

        $(window).on('resize', function () {
            setTimeout(function () {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>
    <script >
        $(document).ready(function () {
            // initialization of video on background
            $.HSCore.helpers.HSBgVideo.init('.js-bg-video');

            // initialization of popups
            $.HSCore.components.HSPopup.init('.js-fancybox');
        });
    </script>

<!-- Chatter JS -->
@yield('js')

</body>
</html>