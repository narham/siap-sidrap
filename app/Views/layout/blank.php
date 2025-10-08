<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Admin Templates - Dashboard Templates">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="img/favicon.svg" />

    <!-- Title -->
    <title>Admin Dashboard Templates Admin Dashboards - Admin Dashboard</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/fonts/style.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main.min.css">


    <!-- *************
			************ Vendor Css Files *************
		************ -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="vendor/daterange/daterange.css" />

</head>

<body>

    <!-- Loading starts -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading ends -->

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

            <!-- Sidebar brand start  -->
            <div class="sidebar-brand">
                <a href="index.html" class="logo">
                    <img src="img/logo.svg" alt="Bootstrap Gallery" />
                </a>
            </div>
            <!-- Sidebar brand end  -->

            <!-- Sidebar content start -->
            <div class="sidebar-content">

                <!-- sidebar menu start -->
                <?= $this->include('layout/sidebar'); ?>
                <!-- sidebar menu end -->

            </div>
            <!-- Sidebar content end -->

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- Page content start  -->
        <div class="page-content">

            <!-- Header start -->
            <?= $this->include('layout/header'); ?>
            <!-- Header end -->

            <!-- Page header start -->
            <?= $this->include('layout/breadcum'); ?>
            <!-- Page header end -->

            <!-- Main container start -->
            <div class="main-container">

                <?= $this->renderSection('conten'); ?>

            </div>
            <!-- Main container end -->

        </div>
        <!-- Page content end -->

    </div>
    <!-- Page wrapper end -->

    <!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/moment.js"></script>


    <!-- *************
			************ Vendor Js Files *************
		************* -->
    <!-- Slimscroll JS -->
    <script src="vendor/slimscroll/slimscroll.min.js"></script>
    <script src="vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Daterange -->
    <script src="vendor/daterange/daterange.js"></script>
    <script src="vendor/daterange/custom-daterange.js"></script>

    <!-- Polyfill JS -->
    <script src="vendor/polyfill/polyfill.min.js"></script>

    <!-- Apex Charts -->
    <script src="vendor/apex/apexcharts.min.js"></script>
    <script src="vendor/apex/admin/visitors.js"></script>
    <script src="vendor/apex/admin/deals.js"></script>
    <script src="vendor/apex/admin/income.js"></script>
    <script src="vendor/apex/admin/customers.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>