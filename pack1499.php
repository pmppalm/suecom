<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIB | 1499</title>

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

    <?php $_SESSION["pack"] = 3; ?>
</head>

<body id="page-top">
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#1f1d1d">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">BIBcommerce</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
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
    <section id="pack1499">
        <div class="container">
            <div class="col-lg-12 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Business Internet Broadband High-Speed Package</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid" src="img/pictures/human3.jpg" alt="">
                        <h1 class="card-title pricing-card-title">1499 บาท <small class="text-muted">/ เดือน</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ความเร็วดาวน์โหลดสูงสุด 200/100 Mbps</li>

                            <hr>
                            <li>ค่าโทร 400 บาท/เดือน</li>
                            <hr>
                            <li>บริการซ่อมด่วนภายใน 24 ชั่วโมง</li>
                            <hr>
                            <li>บริการติดตั้งและเดินสายฟรี</li>
                            <hr>
                            <li>โทรในเครือข่ายฟรี 24 ชั่วโมง</li>
                        </ul>
                        <?php if(isset($_SESSION["email"])){ ?>
                        <button type="button" name="reg" class="btn btn-lg btn-block btn-outline-primary"
                            onclick="window.location='form.php'">สมัครแพ็คเกจ</button>
                        <?php }else{ ?>
                            <?php $_SESSION["packet799"] = 0; 
                            $_SESSION["packet999"] = 0; 
                            $_SESSION["packet1499"] = 1; 
                            $_SESSION["packet1999"] = 0; 
                            $_SESSION["packet2399"] = 0;  
                            $_SESSION["packet2999"] = 0;  
                             ?>
                        <button type="button" name="reg2" class="btn btn-lg btn-block btn-outline-primary"
                            onclick="window.location='login.php'">สมัครแพ็คเกจ</button>
                        <?php } ?>
                    </div>
                </div>
            </div>

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