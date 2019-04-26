<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIB | My Profile</title>

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
	if (isset($_POST["veriPass"])) {
		$connectionVeri = new mysqli("localhost", "root", "", "b2bshop");
        $emaill = $_SESSION["email"];
        $passwordVeri = $connectionVeri->real_escape_string($_POST["ChackPass"]);
        $dataVeri = $connectionVeri->query("SELECT * FROM users WHERE email='$emaill' AND password='$passwordVeri'");
       
		if ($dataVeri->num_rows > 0) {
            $_SESSION["chackpass"]=1;
            header('location:editprofile.php');
        }
        else{
            $_SESSION["chackpass"]=0;
        }
  
    }
    
?>
    <!--End php -->

</head>

<body id="page-top" style="background-color:#f2f2f2"> 

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
                            <a class="dropdown-item btn" href="history.php">History</a>
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
    <!--details-->
    <!-- Services -->

    <section class="login_box_area p_120">
        <div class="row justify-content-md-center" >
          <div class="col-2" >
            <div class="login_box_img">
              <div class="hover">
                <div class="list-group no-border list-unstyled" >

                      <span class="list-group-item heading" style="background-color:#ffb366">Manage Account</span>
                      <a href="profile.php"  class="list-group-item active"><i class="fa fa-fw fa-credit-card"></i> My Profile</a>
                      <a href="changepass.php" class="list-group-item"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                      <a href="my_membership.html" class="list-group-item"><i class="fa fa-fw fa-cubes"></i> Membership</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-8 shadow-sm" style="background-color:#ffffff">
            <div class="login_form_inner">
              <div class="container"> 
                <div id="content">
                  <div class="container">
                    <div class="row">    
                      <div class="row justify-content-md-center">
                        <div class="col col-lg-12 col-xl-10">
                          <div class="row has-sidebar">
                          <div class="col">
                            <div class="page-header bordered" >
                                            <h1>ขั้นตอนที่ 1 <h1>
                                                    <small>ยืนยันรหัสผ่านของท่านเพื่อแก้ไขข้อมูลส่วนตัว</small>
                                                    <hr>
                                        </div>
                                        <form method="POST">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: #ff9800">First Name</label>
                                                        <br>
                                                        <label> <?php echo $_SESSION["firstName"];?></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: #ff9800">Last Name</label>
                                                        <br>
                                                        <label> <?php echo $_SESSION["lastName"];?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: #ff9800">Your Email</label>
                                                        <br>
                                                        <label> <?php echo $_SESSION["email"]?></label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="color: #ff9800">Password</label>
                                                        <input type="password" id="ChackPass" name="ChackPass"
                                                            class="form-control form-control-lg" placeholder="">
                                                        <?php
                         if(isset($_POST['veriPass'])){
                        if($_SESSION["chackpass"]==0){
                            echo "<p style='color: #ff0000'>รหัสผ่านไม่ถูกต้อง!!!</p>";
                        }
                    }
                         ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group action">
                                                <button type="submit" id="veriPass" name="veriPass"
                                                    class="btn btn-lg btn-primary">ยืนยัน</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <script>
    function myFunction() {
        alert("I am an alert box!");
    }
    </script>

</body>

</html>