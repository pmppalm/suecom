<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>BIB | Login</title>
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

    <!--php-->
    <?php
	session_start();

	if (isset($_SESSION["email"]) && isset($_SESSION["loggedIn"])) {
		header("Location: index.php");
		exit();
	}

	if (isset($_POST["submit"])) {
		$connection_login = new mysqli("localhost", "root", "", "b2bshop");
		
        $email_login = $connection_login->real_escape_string($_POST["email"]);
        $password_login = $connection_login->real_escape_string($_POST["password"]);
        $data_login = $connection_login->query("SELECT * FROM users WHERE email='$email_login' AND password='$password_login'");
        $sql_login = "SELECT * FROM users WHERE email = '".$email_login."' AND password = '".$password_login."'" ;
        $sql2_login ="SELECT * FROM users WHERE email = '".$email_login."'" ;
        $sql3_login ="SELECT * FROM users WHERE email = '".$password_login."'" ;
        $sql4_login = "SELECT token FROM users WHERE email = '".$email_login."' AND password = '".$password_login."'" ;
        $result_login=$connection_login->query($sql_login);
        $result2_login=$connection_login->query($sql2_login);
        $result3_login=$connection_login->query($sql3_login);
        $result4_login=$connection_login->query($sql4_login);
       
		if ($data_login->num_rows > 0) {
            $row_login = $data_login->fetch_assoc();
            $_SESSION["email"] = $email_login;
            $_SESSION["loggedIn"] = 1;
            $_SESSION["firstName"]=$row_login['firstName'];
            $_SESSION["token"]=$row_login['token'];
            $_SESSION["lastName"]=$row_login['lastName'];
            $_SESSION["email"]=$row_login['email'];
         
            if(!empty($_POST["remember"])){
                setcookie ("member_login",$email_login,time()+ (10 * 365 * 24 * 60 * 60));  
                setcookie ("password",$password_login,time()+ (10 * 365 * 24 * 60 * 60));
                $_SESSION["email"] = $email_login;
            }
            else{
                if(isset($_COOKIE["member_login"]))   
                {  
                setcookie ("member_login","");  
                }  
                if(isset($_COOKIE["password"]))   
                {  
                setcookie ("password","");  
                }  
            }  
            if($_SESSION["packet799"]==1){
                header("location:pack799.php");
                exit();
            }
            else if($_SESSION["packet999"]==1){
                header("location:pack999.php");
                exit();
            }
            else if($_SESSION["packet1499"]==1){
                header("location:pack1499.php");
                exit();
            }
            else if($_SESSION["packet1999"]==1){
                header("location:pack1999.php");
                exit();
            }
            else if($_SESSION["packet2399"]==1){
                header("location:pack2399.php");
                exit();
            }
            else if($_SESSION["packet2999"]==1){
                header("location:pack2999.php");
                exit();
            }
            else {header("location:index.php");
                    exit();
            }        
            }
		} else {
			
			echo "Please check your inputs!";
		}	
?>
    <!--End php -->
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
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
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
                </ul>
            </div>
        </div>
    </nav>
    <!--Detail-->
    <section class="login_box_area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/logintest.jpg" alt="">
                        <div class="hover">
                    
                            <h4>คุณเป็นสมาชิกกับเราแล้วหรือยัง ?</h4>
                            <p>สำหรับลูกค้าท่านใดที่ยังไม่ได้สมัครสมาชิกเพื่อเข้าใช้งาน BIB
                                สามารถทำการสมัครสมาชิกได้ที่นี่</p>
                            <a class="main_btn" href="registration.php">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>

                        <form class="row login_form" action="login.php" method="POST">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email"
                                    value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"
                                    placeholder="Email">
                            </div>
                            <?php
                                 if(isset($_POST['submit'])){
                                 if($result2_login->num_rows <= 0){
                               echo " <div class='container bg-danger text-white'>Email Incorrect!</div>"; 
                                        }
                                            }
                             ?>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"
                                    placeholder="Password">
                            </div>
                            <?php
                                 if(isset($_POST['submit'])){
                                 if($result3_login->num_rows <= 0){
                               echo "<div class='container bg-danger text-white'>Password Incorrect!</div>"; 
                                        }
                                        
                                            }
                             ?>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="remember"
                                        <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
                                    <label for="f-option2 " style="color:grey">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" name="submit" value="Login" class="btn float-right login_btn">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>