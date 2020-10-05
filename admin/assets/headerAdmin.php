<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>J-Cov</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/stylepesan.css" rel="stylesheet">

</head>

<body>

    <?php
    session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] != "admin") {
        header("location:../login.php?pesan=gagal");
    }
    ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.php"><span>J-Cov</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php#about">About COVID-19</a></li>
                    <li><a href="index.php#data">Data Pantauan</a></li>
                    <li><a href="index.php#faq">F.A.Q</a></li>
                    <li><a href="pelaporan.php">Pelaporan</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Lainnya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="deteksi.php">Deteksi Mandiri</a>
                            <a class="dropdown-item" href="adminrumahsakit.php">RS Rujukan</a>
                            <a class="dropdown-item" href="berita.php">Berita</a>
                            <a class="dropdown-item" href="datapenyebaran.php">Data Penyebaran Kab. Jember</a>
                            <a class="dropdown-item" href="konsultasi.php">Konsultasi</a>
                        </div>
                    </li>

                    <li class="get-started"><a href="logout.php">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->