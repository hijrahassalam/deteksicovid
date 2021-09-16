<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="deteksi, covid, corona virus, ct-scan, xray, tensorflow.js, cnn" />
    <meta name="description" content="DeteksiCovid - Aplikasi Deteksi Covid menggunakan Tensorflow.js" />
    <meta name="author" content="hijrahassalam" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>DeteksiCovid - Aplikasi Deteksi Covid menggunakan Tensorflow.js</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="<?= base_url() ?><?= base_url() ?>assets/images/favicon.ico" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="<?= base_url() ?>assets/css/line-awesome.min.css" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="<?= base_url() ?>assets/css/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!--== owl.carousel -->
    <link href="<?= base_url() ?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="<?= base_url() ?>assets/css/spacing.css" rel="stylesheet" type="text/css" />

    <!--== theme.min -->
    <link href="<?= base_url() ?>assets/css/theme.min.css" rel="stylesheet" />

    <!-- inject css end -->

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!--header start-->

        <header class="site-header">
            <div id="header-wrap" class="position-absolute w-100 z-index-1">
                <div class="container">
                    <div class="row">
                        <!--menu start-->
                        <div class="col">
                            <nav class="navbar navbar-expand-lg navbar-light justify-content-start">
                                <a class="navbar-brand logo text-primary mb-0 me-6" href="<?= site_url('home') ?>">
                                    Deteksi<span class="text-dark font-w-7">Covid</span>
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav mx-auto">
                                        <li class="nav-item"> <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
                                        </li>
                                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Deteksi</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?= site_url('deteksi/ct') ?>">CT-Scan</a>
                                                </li>
                                                <li><a class="dropdown-item" href="<?= site_url('deteksi/xray') ?>">X-Ray</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"> <a class="nav-link" href="#covidtracker">Covid Tracker</a>
                                        </li>
                                        <!-- <li class="nav-item"> <a class="nav-link" href="#">About</a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="d-sm-flex align-items-center justify-content-end ms-auto"> <a class="btn btn-light btn-sm" href="login.html">Login</a> <a class="btn btn-light btn-sm ms-3 d-sm-inline-block d-none" href="signup.html">Sign Up</a>
                                </div>
                            </nav>

                        </div>
                        <!--menu end-->
                    </div>
                </div>
            </div>
        </header>