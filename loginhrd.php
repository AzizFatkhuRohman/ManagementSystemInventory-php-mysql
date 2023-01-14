<?php
session_start();
$username = 'fajriah';
$password = 'fajriah';
if (isset($_POST['pengelola'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION["username"] = $username;
		echo "<script>window.location.href='homehrd.php';</script>";
    } else {
        
        echo "<script>alert('Password Atau Username salah')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Log In Hrd</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="page-index">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="d-flex align-items-center">SIIBM</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">

                <div class="dropdown" style="margin-left: 1rem;">
                    <a class="btn btn-outline-warning dropdown-toggle" style='padding-right: 1rem;' role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Log In
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logindirektur.php">Log In Direktur</a></li>
                        <li><a class="dropdown-item" href="loginhrd.php">Log In Hrd</a></li>
                    </ul>
                </div>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div>
                        <h5 style='color:yellow;'>Log In Hrd</h5>
                    </div>
                    <form method='post'>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"
                                style='color:white;'>Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name='username'>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label"
                                style='color:white;'>Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" name='password'>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name='pengelola' value='Log In' class="btn btn-outline-warning"
                                id="exampleFormControlInput1">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>SIIBM</span>
                        </a>
                        <p>SIIBM adalah Web Aplikasi untuk mempermudah pengelolaan batang metal.<br>
                            menjadikan pekerjaan lebih efisien.</p>

                    </div>


                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Address</h4>
                        <p>
                            CV. MULIA TATA SEJAHTERA<br>
                            Tungsten, Carbide, Machining, Ceramic Guide, Ceramic Coating, General Trading<br>
                            Puri Kosambi Blok JJ No.03 Kosambi Klari-Karawang 41371<br>Telp/fax(0267) 439621
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>SIIBM</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>