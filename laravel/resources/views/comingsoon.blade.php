<!--
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/17/2018
 * Time: 6:18 PM
 */
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Citizen Warfare - Coming Soom!</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="g-bg-gray-dark-v1 g-color-white">
<main class="g-height-100x g-min-height-100vh g-flex-centered g-pa-15">
    <div class="text-center g-flex-centered-item g-position-rel">
        <div class="g-font-size-180 g-font-size-240--sm g-font-size-420--lg g-line-height-1 g-font-weight-200 g-color-gray-dark-v2">Coming Soon</div>

        <div class="g-absolute-centered">
            <h1 class="g-font-weight-200 g-mb-20">Citizen Warfare</h1>
            <p class="g-color-white-opacity-0_6 g-font-size-18">The Premier Tournament System for Star Citizen.</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                Want To know when we are launching? <br> leave your email and we will let you know!
                <form method="post" action="/newsletter">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Name">Name:</label>
                        <input type="text" class="form-control" id="Name" aria-describedby="Full Name" placeholder="Name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="newsletteremail">Email:</label>
                        <input type="email" class="form-control" id="newsletteremail" aria-describedby="Newsletter" placeholder="Enter email" name="newsletteremail">
                        <small id="newsletteremail" class="form-text text-muted">We'll never share your email with anyone else. <br> Our Word is Our Bond</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>

<!-- JS Global Compulsory -->
<script src="assets/js/jquery.min.js"></script>
<script src="vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="vendor/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<!-- JS Custom -->
<script src="assets/js/custom.js"></script>
</body>

</html>