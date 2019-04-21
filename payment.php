<?php session_start();?>
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
    margin-top: 250px;
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

  <?php 
    include('connectDB.php');
    if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $password = $conn->real_escape_string($_POST['password']);
     
     $sql = "SELECT * FROM `contact` WHERE `username` = '".$username."' AND `password` = '".$password."'" ;
     $result=$conn->query($sql);

    if($result->num_rows > 0){
     $row = $result->fetch_assoc();
     $_SESSION['id'] = $row['id'];
     $_SESSION['name'] = $row['name'];
     header('location:index.php');
    }
    else{
        echo "Username & Password is invalid";
    }
    }
    ?>
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink " id="mainNav" style="background-color:#1f1d1d">
    <div class="container ">
      <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">BIBcommerce</a>
      <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn" href="#">Action</a>
                            <a class="dropdown-item btn" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn btn-danger" href="logout.php">log out</a>
                        </div>
                    </li>
                    <?php }else {?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success btn-md js-scroll-trigger" href="login.php">Log in</a>
                    </li>
                    <?php }?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

  <?php if(isset($_SESSION["pack"])){
    if($_SESSION["pack"] == 1) {?>
      <form id="checkout-form" class="checkout-form" action="checkout799.php" method="POST">
    <?php }else if($_SESSION["pack"] == 2){ ?>
      <form id="checkout-form" class="checkout-form" action="checkout999.php" method="POST">
    <?php }else if($_SESSION["pack"] == 3){ ?>
      <form id="checkout-form" class="checkout-form" action="checkout1499.php" method="POST">
    <?php }else if($_SESSION["pack"] == 4){ ?>
      <form id="checkout-form" class="checkout-form" action="checkout1999.php" method="POST"> 
    <?php }else if($_SESSION["pack"] == 5){ ?>
      <form id="checkout-form" class="checkout-form" action="checkout2399.php" method="POST"> 
    <?php }else { ?>
      <form id="checkout-form" class="checkout-form" action="checkout2999.php" method="POST">
    <?php } ?>
  <?php } ?>

    <div class="form-group">
        <label >Card number</label>
        <input type="text" data-name="cardNumber" class="form-control" placeholder="••••••••••••••••" />
      </div>

      <div class="form-group">
        <label>Name on card</label>
        <input type="text" data-name="nameOnCard" class="form-control" placeholder="Full Name" />
      </div>

      <div class="form-group">
        <label>Expiry date</label>
        <div class="row">
          <div class="col-md-4">
            <select class="form-control" data-name="expiryMonth">
              <option value="">MM</option>
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
              <option value="">YYYY</option>
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
        <label>Security code</label>
        <input type="text" data-name="securityCode" class="form-control" placeholder="CVC" />
      </div>

        <div class="form-group">
        <button class="btn btn-lg btn-block btn-outline-primary">ชำระเงิน</button>
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