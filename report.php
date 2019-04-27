<?php session_start();?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>B2B - Member</title>

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
    <center><h1 style="color: #ffd633">FORM</h1></center>
    <div class="container">
    
        <form class="checkout-form">
        <div class="form-group">
        <form  method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <select class="form-control" name="companyRe" data-name="expiryMonth">
                                    <option value="1">TypeCompany</option>
                                    <option value="หน่วยงานเอกชน">หน่วยงานเอกชน</option>
                                    <option value="หน่วยงานรัฐบาล">หน่วยงานรัฐบาล</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" name="packRe" data-name="expiryYear">
                                    <option value="1">Packages</option>
                                    <option value="799">799 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 50/20 Mbps</option>
                                    <option value="999">999 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 100/50 Mbps</option>
                                    <option value="1499">1,499 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 200/100 Mbps</option>
                                    <option value="1999">1,999 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 300/200 Mbps</option>
                                    <option value="2399">2,399 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 500/300 Mbps</option>
                                    <option value="2999">2,999 บาท/เดือน - ความเร็วดาวน์โหลดสูงสุด 1000/500 Mbps</option>
                                </select>
                            </div>
                            <div class="col-md-3" >
                                <select class="form-control" name="statusRe" data-name="expiryMonth">
                                    <option value="1">Status</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>

                                 
                                </select>
                            </div> 
                            <div class="col-md-1" >
                            <button name="submitRe"
                            class="btn  btn-block btn-outline-primary">ค้นหา</button>
                            
                            </div>
                             </form>
                        </div>
                    </div>
            <center>
                <div class="">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Company</th>
                                <th scope="col">TypeCompany</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>                              
                                <th scope="col">Packages</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                </div>
    </div>
    </center>
    </div>
    <?php

$connection_report = new mysqli("localhost", "root", "", "b2bshop");	
$sql_report = "SELECT * FROM packages" ;
$result_report=mysqli_query($connection_report, $sql_report);
if(isset($_POST["submitRe"])){
$companyRe=$_POST["companyRe"];
$packRe=$_POST["packRe"];
$statusRe=$_POST["statusRe"];
if($companyRe==1&&$packRe==1&&$statusRe==1){
    
while ($row_report = mysqli_fetch_array($result_report)){
    echo "<tr>";
    echo "<td>" .$row_report["firstName"] . "</td>";
    echo "<td>" .$row_report["lastName"] . "</td>";
    echo "<td>" .$row_report["company"] . "</td>";
    echo "<td>" .$row_report["typeCompay"] . "</td>";
    echo "<td>" .$row_report["email"] . "</td>";
    echo "<td>" .$row_report["phone"] . "</td>";
    echo "<td>" .$row_report["pack"] . "</td>";
    echo "<td>" .$row_report["status"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</form>";
mysqli_close($connection_report);
echo $companyRe;
}

else if($companyRe=="หน่วยงานรัฐบาล" && $packRe=="799" &&$statusRe=="No"){
    $sql_report1 = "SELECT * FROM packages WHERE typeCompay='$companyRe' AND pack='$packRe'";
    $result_report1=mysqli_query($connection_report, $sql_report1);
    while ($row_report = mysqli_fetch_array($result_report1)){
        echo "<tr>";
        echo "<td>" .$row_report["firstName"] . "</td>";
        echo "<td>" .$row_report["lastName"] . "</td>";
        echo "<td>" .$row_report["company"] . "</td>";
        echo "<td>" .$row_report["typeCompay"] . "</td>";
        echo "<td>" .$row_report["email"] . "</td>";
        echo "<td>" .$row_report["phone"] . "</td>";
        echo "<td>" .$row_report["pack"] . "</td>";
        echo "<td>" .$row_report["status"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
    echo $companyRe;

    mysqli_close($connection_report);
}
}

else{
    
while ($row_report = mysqli_fetch_array($result_report)){
    echo "<tr>";
    echo "<td>" .$row_report["firstName"] . "</td>";
    echo "<td>" .$row_report["lastName"] . "</td>";
    echo "<td>" .$row_report["company"] . "</td>";
    echo "<td>" .$row_report["typeCompay"] . "</td>";
    echo "<td>" .$row_report["email"] . "</td>";
    echo "<td>" .$row_report["phone"] . "</td>";
    echo "<td>" .$row_report["pack"] . "</td>";
    echo "<td>" .$row_report["status"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</form>";
mysqli_close($connection_report);

}
?>

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