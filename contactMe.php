<?php session_start();?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>B2B - Contact Me</title>

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
    <center><h1 style="color: #ffd633">CONTACTS</h1></center>
    <div class="container">
        <form class="checkout-form">
            <center>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Meassage</th>
                            </tr>
                        </thead>
                </div>
    </div>
    </center>
    </div>
    <?php
$connection_contactme = new mysqli("localhost", "root", "", "b2bshop");	
$sql_contactme = "SELECT * FROM contact" ;
$result_contactme=mysqli_query($connection_contactme, $sql_contactme);

while ($row_contactme = mysqli_fetch_array($result_contactme)){
    echo "<tr>";
   // echo "<td>" .$row_contactme["id"] . "</td>";
    echo "<td>" .$row_contactme["name"] . "</td>";
    echo "<td>" .$row_contactme["email2"] . "</td>";
    echo "<td>" .$row_contactme["phone"] . "</td>";
    echo "<td>" .$row_contactme["message"] . "</td>";
   // echo "<td>" .$row_contactme["card"] . "</td>";
   // echo "<td>" .$row_contactme["nameCard"] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</form>";
mysqli_close($connection_contactme);
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