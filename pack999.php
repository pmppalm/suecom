<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIB | Pack999</title>

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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink " id="mainNav"
        style="background-color:#1f1d1d">
        <div class="container ">
            <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">BIBcommerce</a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <!--<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>-->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger active" href="index.php#portfolio">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#contact">Contact</a>
                    </li>
                    <?php if(isset($_SESSION['id'])) {?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome to <?php echo $_SESSION['name']?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn btn-small" href="#">My Profile</a>
                            <a class="dropdown-item btn" href="#">Settings</a>
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

    <section id="about">
        <div class="container">
            <div class="col-lg-12 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Business Internet Broadband High-Speed Package</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid" src="img/pictures/human2.jpg" alt="">
                        <h1 class="card-title pricing-card-title">999 บาท <small class="text-muted">/ เดือน</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
<<<<<<< HEAD
                            <li>ความเร็วดาวน์โหลดสูงสุด 100/50 Mbps</li>
=======
                            <li>ความเร็วดาวน์โหลดสูงสุด 100/50 Mbs</li>
>>>>>>> 4b4f598d71fab4fee4ad8f333423602379f85f9f
                            <hr>
                            <li>ค่าโทร 300 บาท/เดือน</li>
                            <hr>
                            <li>บริการซ่อมด่วนภายใน 24 ชั่วโมง</li>
                            <hr>
                            <li>บริการติดตั้งและเดินสายฟรี</li>
                            <hr>
                            <li>โทรในเครือข่ายฟรี 24 ชั่วโมง</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">ชำระเงิน</button>
                    </div>
                </div>
            </div>

        </div>





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