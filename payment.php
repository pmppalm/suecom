<?php session_start();?>
<?php
	require ("pageCheck.php");
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.omise.co/omise.js.gz"></script>

    <title>BIB | Payment</title>

    <style>
    .checkout-form {
        max-width: 500px;
        margin-left: 300px;
        margin-top: 175px;
    }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

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

    <!--php reg-->
    <?php                     
    if (isset($_POST["submitPayment"])) {
        $connection_payment = new mysqli("localhost", "root", "", "b2bshop");
		$card_payment = $connection_payment->real_escape_string($_POST["cardNum"]);  		
        $candName_payment = $connection_payment->real_escape_string($_POST["cardName"]);				
        $email_payment=$_SESSION['email'];
        $token_payment=$_SESSION['token'];
        $datePayment = date("Y-m-d");
        $data_payment = $connection_payment->query("UPDATE users SET card='$card_payment',nameCard='$candName_payment',date='$datePayment' WHERE users.email='$email_payment'");
       // $data2_payment = $connection_payment->query("UPDATE users SET token = '' WHERE users.email='$email_payment'");
        if ($data_payment == false) {
           echo "Cannot is DATABASE";
        }
        else{
        header('location:checkout'.$token_payment.'.php');
        $data2_payment = $connection_payment->query("UPDATE users SET token = '' WHERE users.email='$email_payment'");
        }
	}	                 
?>    <!--End php -->
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"style="background-color:#1f1d1d">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">BIBcommerce</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
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
                        <?php if($_SESSION["token"]!=1) {?>
                            <a class="dropdown-item btn btn-small" href="profile.php">My Profile</a>
                            <?php if($_SESSION["token"]!=null) {?>
                            <a class="dropdown-item btn btn-small" href="payment.php">Payment</a>
                            <?php }?>
                            <?php }?>
                            <?php if($_SESSION["token"]==1) {?>
                            <a class="dropdown-item btn btn-small" href="admin.php">Admin</a>
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

    <!--paymentDetails-->
    <div class="container">
        <form id="checkout-form" class="checkout-form" method="POST">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">

                    <div class="form-group">
                        <center>
                            <h2>ชำระค่าบริการ</h2>
                        </center>
                    </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>หมายเลขบัตร</label>
                        <input type="text" data-name="cardNumber" name="cardNum" class="form-control"
                            placeholder="••••••••••••••••" />
                    </div>

                    <div class="form-group">
                        <label>ชื่อที่แสดงบนบัตร</label>
                        <input type="text" data-name="nameOnCard" name="cardName" class="form-control"
                            placeholder="ชื่อเต็ม" />
                    </div>

                    <div class="form-group">
                        <label>วันหมดอายุ</label>
                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-control" data-name="expiryMonth">
                                    <option value="">เดือน</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" data-name="expiryYear">
                                    <option value="">ปี</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>รหัสการรักษาความปลอดภัย</label>
                        <input type="password" data-name="securityCode" class="form-control" placeholder="รหัสหลังบัตร" />
                    </div>


                    <div class="form-group">
                        <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_visa"
                            name="q3_myProducts3[paymentType]" checked="" value="visa">
                        <img src="img/pictures/visa.png" width="60" height="60">

                        <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_master"
                            name="q3_myProducts3[paymentType]" value="master">
                        <img src="img/pictures/master.png" width="60" height="60">

                        <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_union"
                            name="q3_myProducts3[paymentType]" value="union">
                        <img src="img/pictures/union.png" width="60" height="40">

                        <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_jcb"
                            name="q3_myProducts3[paymentType]" value="jcb">
                        <img src="img/pictures/jcb.png" width="50" height="40">
                    </div>

                    <div class="form-group">
                        <button name="submitPayment" class="btn btn-lg btn-block btn-outline-primary">ชำระเงิน</button>
                    </div>

                </div>
            </div>

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