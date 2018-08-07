<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Citizen Warfare, The Premier Star Citizen Tournament Site.">
    <meta name="author" content="MuellerTek">

    <title>Citizen Warfare - The Premier Star Citizen Tournament System</title>

    <!-- Favicon -->
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
    <link rel="stylesheet" href="vendor/hs-admin-icons/hs-admin-icons.css">
    <link rel="stylesheet" href="vendor/animate.css">
    <link rel="stylesheet" href="vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="vendor/hamburgers/hamburgers.min.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">
    <link rel="stylesheet" href="assets/css/admin/unify-admin.css">

    <!-- CSS Modals -->
    <link  rel="stylesheet" href="vendor/animate.css">
    <link  rel="stylesheet" href="vendor/custombox/custombox.min.css">


    <!-- CSS Customization -->
    <link href="assets/css/modern-business.min.css" rel="stylesheet">
    <link href="assets/css/custom.min.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>
    <script src="vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
</head>

<body>
<main>
    @include('shared.nav')
    @include('notification')
    <!-- Promo Block -->
        <section class="g-bg-cover g-bg-pos-center g-bg-img-hero g-bg-black-opacity-0_3--after g-flex-centered g-py-150" style="background-image: url('assets/images/ollisar.jpg');">

        </section>
        <!-- End Promo Block -->
    <section class="g-mb-100">
        <div class="container">
            <div class="row g-pa-50--md" style="padding-top: 20px;">
                @yield('content')
            </div>
        </div>
    </section>
</main>
<div class="u-outer-spaces-helper"></div>


<!-- JS Global Compulsory -->
<script src="vendor/popper.min.js"></script>



<!-- JS Implementing Plugins -->
<script src="vendor/appear.js"></script>
<script src="vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="vendor/fancybox/jquery.fancybox.min.js"></script>
<script  src="vendor/custombox/custombox.min.js"></script>
<script src="vendor/jquery.filer/js/jquery.filer.min.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>

<!-- JS Unify -->
<script src="assets/js/hs.core.js"></script>
<script src="assets/js/helpers/hs.hamburgers.js"></script>
<script src="assets/js/components/hs.header.js"></script>
<script src="assets/js/components/hs.dropdown.js"></script>
<script src="assets/js/components/hs.scrollbar.js"></script>
<script src="assets/js/components/hs.tabs.js"></script>
<script src="assets/js/components/hs.counter.js"></script>
<script src="assets/js/components/hs.modal-window.js"></script>
<script src="assets/js/helpers/hs.focus-state.js"></script>
<script src="assets/js/helpers/hs.file-attachments.js"></script>
<script src="assets/js/components/hs.file-attachement.js"></script>
<script src="assets/js/components/hs.progress-bar.js"></script>
<script src="assets/js/components/hs.rating.js"></script>
<script src="assets/js/components/hs.popup.js"></script>
<script src="assets/js/components/hs.go-to.js"></script>

<!-- jQuery UI Core -->
<script src="vendor/jquery-ui/ui/widget.js"></script>
<script src="vendor/jquery-ui/ui/version.js"></script>
<script src="vendor/jquery-ui/ui/keycode.js"></script>
<script src="vendor/jquery-ui/ui/position.js"></script>
<script src="vendor/jquery-ui/ui/unique-id.js"></script>
<script src="vendor/jquery-ui/ui/safe-active-element.js"></script>
<!-- jQuery UI Helpers -->
<script src="vendor/jquery-ui/ui/widgets/menu.js"></script>
<script src="vendor/jquery-ui/ui/widgets/mouse.js"></script>

<!-- jQuery UI Widgets -->
<script src="vendor/jquery-ui/ui/widgets/datepicker.js"></script>

<!-- JS Customization -->
<script src="assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of rating
        $.HSCore.components.HSRating.init($('.js-rating'), {
            spacing: 2
        });

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

        //Modals
        $.HSCore.components.HSModalWindow.init('[data-modal-target]');

        // initialization of forms
        $.HSCore.components.HSFileAttachment.init('.js-file-attachment');
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

        // initialization of horizontal progress bars
        setTimeout(function () { // important in this case
            var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar-indicator'
            });
        }, 1);
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>
<script  src="assets/js/components/hs.tabs.min.js"></script>

<!-- JS Plugins Init. -->
<script >
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>

<script>
    $(document).ready(function () {
        $("#toggle-name").click(function() {
            var name = $("#toggleMeName");
            var nameForm = $("#toggleMeNameForm");
                name.slideToggle('fast', function(){
                    nameForm.slideToggle('fast');
            });
        });
        $("#toggle-username").click(function() {
            var username = $("#toggleMeUsername");
            var usernameForm = $("#toggleMeUsernameForm");
            username.slideToggle('fast', function(){
                usernameForm.slideToggle('fast');
            });
        });
        $("#toggle-email").click(function() {
            var email = $("#toggleMeEmail");
            var EmailForm = $("#toggleMeEmailForm");
            email.slideToggle('fast', function(){
                emailForm.slideToggle('fast');
            });
        });
        $("#toggle-callsign").click(function() {
            var callsign = $("#toggleMeCallsign");
            var callsignForm = $("#toggleMeCallsignForm");
            callsign.slideToggle('fast', function(){
                callsignForm.slideToggle('fast');
            });
        });
    });
</script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#avatar')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@include('shared.footer')
</body>
</html>
