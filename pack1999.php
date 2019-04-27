<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIB | Pack1999</title>

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
    if (isset($_POST["sendPackhages"])) {
        $connection_799 = new mysqli("localhost", "root", "", "b2bshop");

		$firstName_799 = $_SESSION["firstName"];		
		$lastName_799 = $_SESSION["lastName"]; 				
		$company_799 = $connection_799->real_escape_string($_POST["company"]);  
        $email_799 = $_SESSION["email"];
        $phone_799 = $connection_799->real_escape_string($_POST["phone2"]);
        $companyType_799 = $connection_799->real_escape_string($_POST["choice"]);
        $timestart_799 = $connection_799->real_escape_string($_POST["timestart"]);
        $timeup_799 = $connection_799->real_escape_string($_POST["timeup"]);
        $status_799 = "No";
        $pack_799="1999";
		$data_799 = $connection_799->query("INSERT INTO packages (firstName, lastName, company, email, phone,pack,status,typeCompay,timeIN,timeOut)
         VALUES ('$firstName_799', '$lastName_799', '$company_799', '$email_799','$phone_799','$pack_799','$status_799','$companyType_799','$timestart_799','$timeup_799')");	
	
    	if ($data_799 === false){
            echo "<script>alert('มีข้อผิดพลาดเกิดขึ้นกรุณาลองใหม่อีกครั้ง');
            window.location='pack799.php';
             </script>";
         
        }
        else{
            $_SESSION["payment"]=1;
        header('location:pageThankForm.php');
        }
	}	                 
?>
    <?php $_SESSION["pack"] = 4; ?>
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

    <section id="pack1999">
        <div class="container">
            <div class="col-lg-12 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Business Internet Broadband High-Speed Package</h4>
                    </div>
                    <div class="card-body">
                        <img class="img-fluid" src="img/pictures/human4.jpg" alt="">
                        <h1 class="card-title pricing-card-title">1999 บาท <small class="text-muted">/ เดือน</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>ความเร็วดาวน์โหลดสูงสุด 300/200 Mbps</li>

                            <hr>
                            <li>ค่าโทร 500 บาท/เดือน</li>
                            <hr>
                            <li>บริการซ่อมด่วนภายใน 24 ชั่วโมง</li>
                            <hr>
                            <li>บริการติดตั้งและเดินสายฟรี</li>
                            <hr>
                            <li>โทรในเครือข่ายฟรี 24 ชั่วโมง</li>
                        </ul>
                        <?php if(isset($_SESSION["email"])){ ?>
                        <button type="button" name="reg" class="btn btn-lg btn-block btn-outline-primary"
                        data-toggle="modal" data-target="#exampleModal">สมัครแพ็คเกจ</button>
                        <?php }else{ ?>
                            <?php $_SESSION["packet799"] = 0; 
                            $_SESSION["packet999"] = 0; 
                            $_SESSION["packet1499"] = 0; 
                            $_SESSION["packet1999"] = 1; 
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
        
<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">กรอกข้อมูลของคุณเพื่อให้เจ้าหน้าที่ติดต่อกลับ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
      </div>
      <div class="modal-body">
      <h5 ><center>แพ็กเกจ สปีดแรงทันใจ 1999</center></h5>
      <form method="post">
                        <label>วันที่สะดวกให้ติดต่อกลับ</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="company" class="form-control" placeholder="Company" required>
                                </div>
                            </div>
                            <br>
                            <label>เบอร์โทรศัพท์</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="phone2" class="form-control" placeholder="Tel" required>
                                </div>
                            </div>
                            <br>
                            <label>เลือกหน่วยงาน</label>
                            <div class="form-group">
                                    <input type="radio" name="choice" class="choiceTypeRadios" id="input_3_paymentType_private"
                                         checked="" value="หน่วยงานเอกชน">
                                        <label>หน่วยงานเอกชน</label>
                            
                                    <input type="radio" name="choice" class="choiceTypeRadios" id="input_3_paymentType_government"
                                         value="หน่วยงานรัฐบาล">
                                        <label>หน่วยงานรัฐบาล</label>
                            </div>
                            <div class="form-group">
                        <label>วันที่สะดวกให้ติดต่อกลับ</label>
                        <div class="row">
                        <div class="col-md-4">
                        <label>ตั้งแต่</label>
                                <select data-name="timestart">
                                    <option value="9:00">9:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <label>ถึง</label>
                                <select data-name="timeup">
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                            <button id="sendPackhages" class="btn btn-lg btn-block btn-outline-primary" type="submit"
                                name="sendPackhages">SendMessage</button>
                        </form>
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