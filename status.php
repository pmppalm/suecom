<?php session_start();?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>B2B - Status</title>

    <style>
    .checkout-form {
        margin-top: 100px;
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
    <link href='https://fonts.googleapis.com/css?family=Ro boto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <?php                     
    if (isset($_POST["submitToken"])) {
        $connection_status = new mysqli("localhost", "root", "", "b2bshop");	
        $email_in_status = $connection_status->real_escape_string($_POST["EmailUser"]);
        $token_in_status = $connection_status->real_escape_string($_POST["tokenIn"]);					
        $email_status=$_SESSION['email'];
        $token_status=$_SESSION['token'];
        $data_status = $connection_status->query("UPDATE users SET token='$token_in_status',token2 ='$token_in_status' WHERE users.email='$email_in_status'");
        if ($data_status == false) {
           echo "Cannot is DATABASE";
        }
        else{
        header('location:admin.php');
        $data2_status = $connection_status->query("UPDATE packages SET status='Yes' WHERE packages.email='$email_in_status'");
        }
	}	                 
?>
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
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="admin.php">MEMBERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="contactMe.php">CONTACTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="status.php">STATUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="report.php">FORM</a>
                    </li>
                    <?php if(isset($_SESSION["email"])) {?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome <?php echo $_SESSION["firstName"]?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
    <section id="thankyou">
    
        <div class="container">
            <form id="checkout-form" class="checkout-form" method="POST">
                <div class="col-lg-12 text-center">
                    <div class="card-form">
                    <div class="form-group"><br><br>
                            <h1 class="intro-heading text-uppercase text-muted">CHANGE PACKAGES</h1>
                            <div class="form-group">
                                <input type="email" name="EmailUser" class="form-control" placeholder="Please email users change" required><br>
                                <div class="form-group">
                
                        <div class="row">
                            <div class="col">
                                <select class="form-control"  name="tokenIn" required>
                                    <option value="">Select packages</option>
                                    <option value="799">799 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 50/20 Mbps</option>
                                    <option value="999">999 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 100/50 Mbps</option>
                                    <option value="1499">1,499 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 200/100 Mbps</option>
                                    <option value="1999">1,999 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 300/200 Mbps</option>
                                    <option value="2399">2,399 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 500/300 Mbps</option>
                                    <option value="2999">2,999 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 1000/500 Mbps</option>
                                
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button name="submitToken"
                            class="btn btn-lg btn-block btn-outline-primary">ยืนยันการเปลี่ยนแปลง</button>
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