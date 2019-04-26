<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIB | Business Internet Broadband</title>

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
    if (isset($_POST["sendMessageButton"])) {
        $connection_index = new mysqli("localhost", "root", "", "b2bshop");

		$name_index = $connection_index->real_escape_string($_POST["name"]);  		
		$email_index = $connection_index->real_escape_string($_POST["email2"]);  				
		$phone_index = $connection_index->real_escape_string($_POST["phone"]);  
		$message_index = $connection_index->real_escape_string($_POST["message"]); 
			
		$data_index = $connection_index->query("INSERT INTO contact (name, email2, phone, message) VALUES ('$name_index', '$email_index', '$phone_index', '$message_index')");

    	if ($data_index->num_rows > 0) {
            $row_index = $data->fetch_assoc();
            $_SESSION["email"] = $email;
            $_SESSION["loggedIn"] = 1;
            $_SESSION["firstName"]=$row_index['firstName'];
            $_SESSION["token"]=$row_index['token'];
            $_SESSION["lastName"]=$row_index['lastName'];
            $_SESSION["eamil"]=$row_index['email'];
        }
        else{
        header('location:index.php#contact');
        }
	}	                 
?>
    <!--End php -->

</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
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

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Electronic Commerce!</div>
                <div class="intro-heading text-uppercase">Business Internet Broadband</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">See Packages</a>

            </div>
        </div>
    </header>
    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Packages Internet</h2>
                    <h6 class="text-muted">Business Internet Broadband |
                        เข้าถึงข้อมูลทั่วโลกทันสมัยด้วยอินเทอร์เน็ตความเร็วสูง</h6>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item" onclick="window.location='pack799.php'">
                    <a class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/pictures/human.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ค่าบริการรายเดือน 799 บ.</h4>
                        <h6 class="text-muted"></h6>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item" onclick="window.location='pack999.php'">
                    <a class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/pictures/human2.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ค่าบริการรายเดือน 999 บ.</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item" onclick="window.location='pack1499.php'">
                    <a class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/pictures/human3.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ค่าบริการรายเดือน 1499 บ.</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item" onclick="window.location='pack1999.php'">
                    <a class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/pictures/human4.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ค่าบริการรายเดือน 1999 บ.</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item" onclick="window.location='pack2399.php'">
                    <a class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/pictures/human5.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ค่าบริการรายเดือน 2399 บ.</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item" onclick="window.location='pack2999.php'">
                    <a class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/pictures/human6.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ค่าบริการรายเดือน 2999 บ.</h4>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">บริการทุกระดับประทับใจ.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">การดำเนินธุรกิจโดยใช้สื่ออิเล็กทรอนิกส์
                        เพื่อให้บรรลุเป้าหมายทางธุรกิจที่องค์กรได้วางไว้.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Maintenance</h4>
                    <p class="text-muted">ใส่ใจลูกค้าทุกระดับองค์กร พร้อมซ่อมและบำรุงรักษาตลอด 24 ชั่วโมง</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">security</h4>
                    <p class="text-muted">ใส่ใจในรายละเอียดของลูกค้า ปกป้องความเป็นส่วนตัวของสมาชิกทุกระดับองค์กร</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Our Develop Team</h2><br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/9.jpg" alt="">
                        <h4>Pannathorn Porsintuchai</h4>
                        <p class="text-muted">07590515</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/spice.pannathorn.92" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/pmppalm" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/6.jpg" alt="">
                        <h4>Thanadon Suiyanan</h4>
                        <p class="text-muted">07590650</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/tarnardon.chaiamonpan" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/pmppalm" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/5.jpg" alt="">
                        <h4>Thanaphum Sinthurak</h4>
                        <p class="text-muted">07590653</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/ferris.wheel2" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/automiku" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/7.jpg" alt="">
                        <h4>Paisit Wattanapattaraporn</h4>
                        <p class="text-muted">07590673</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/tate1997" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/pmppalm" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/team/8.jpg" alt="">
                        <h4>Wongsathorn Jaisin</h4>
                        <p class="text-muted">07590682</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/pmppalm" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/pmppalm" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h5 class="section-heading">สามารถติดต่อเราได้ที่นี่</h5><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="sentMessage" name="sentMessage" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text"
                                        placeholder="Your Name *" required="required"
                                        data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email2" name="email2" type="email"
                                        placeholder="Your Email *" required="required"
                                        data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" type="tel"
                                        placeholder="Your Phone *" required="required"
                                        data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message"
                                        placeholder="Your Message *" required="required"
                                        data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>

                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                                    type="submit" name="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
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

    <script>
    function myFunction() {
        alert("I am an alert box!");
    }
    </script>

</body>

</html>