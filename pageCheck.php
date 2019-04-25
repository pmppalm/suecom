<?php
	session_start();
	if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])) {
			header("Location: login.php");
			exit();
    }
    else if (!isset ($_SESSION["payment"])) {
        header("Location: index.php");
        exit();
    }
?>