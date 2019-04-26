<?php
    session_start();
	if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])) {
			header("Location: login.php");
			exit();
    }
    else if (!isset ($_SESSION["payment"])&&($_SESSION["token"]==null)) {
        header("Location: index.php");
        exit();
    }
?>