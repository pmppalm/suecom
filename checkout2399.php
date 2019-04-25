<?php session_start();?>
<?php
	require ("pageCheck.php");
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>B2B - Checkout</title>

    <style>
    .checkout-form {
        max-width: 500px;
        margin-left: 300px;
        margin-top: 250px;
    }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#1f1d1d">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">BIBcommerce</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <!--<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#services">Services</a>
          </li>-->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact</a>
                    </li>
                    <?php if(isset($_SESSION["email"])) {?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome <?php echo $_SESSION["firstName"]?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn btn-small" href="profile.php">My Profile</a>
                            <a class="dropdown-item btn" href="history.php">History</a>
                            <?php if($_SESSION["token"]!=null) {?>
                            <a class="dropdown-item btn btn-small" href="payment.php">Payment</a>
                            <?php }?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn btn-danger" href="logout.php">Logout</a>
                        </div>
                    </li>
                    <?php }else {?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login.php">Log in</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <form id="checkout-form" class="checkout-form" action="/checkout.php" method="POST">
            <center>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h2 class="my-0 font-weight-normal">การชำระเงินเสร็จสิ้น</h2>
                    </div>
                    <div class="card-body">
                        <h1>Package</h1>
                        <h2 class="card-title pricing-card-title">ค่าบริการ 2399 บาท <small class="text-muted">/
                                เดือน</small></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ความเร็วดาวน์โหลดสูงสุด 500/300 Mbs</li>
                            <br>
                            <li>ค่าโทร 1000 บาท/เดือน</li>
                            <br>
                            <li>บริการซ่อมด่วนภายใน 24 ชั่วโมง</li>
                            <br>
                            <li>บริการติดตั้งและเดินสายฟรี</li>
                            <br>
                            <li>โทรในเครือข่ายฟรี 24 ชั่วโมง</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary"
                            onclick="window.location='index.php'">กลับสู่หน้าหลัก</button>
                    </div>
                </div>

            </center>
        </form>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <span class="copyright">&copy; Business Internet Broadband 2019</span>
                    </ul>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

</body>

</html>