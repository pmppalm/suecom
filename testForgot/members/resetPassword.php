<?php
	if (isset($_GET["token"]) && isset($_GET["email"])) {
<<<<<<< HEAD
		$connection = new mysqli("localhost", "root", "", "b2bshop");
=======
		$connection = new mysqli("localhost", "root", "", "membershipSystem");
>>>>>>> 69255a9ce652ea7360e16e71a600cc581bd53015
		
		$email = $connection->real_escape_string($_GET["email"]);
		$token = $connection->real_escape_string($_GET["token"]);

		$data = $connection->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND token <> '' AND expire > NOW()");

		if ($data->num_rows > 0) {
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 15);

			$password = sha1($str);

			$connection->query("UPDATE users SET password = '$password', token = '' WHERE email='$email'");

			echo "Your new password is: $str";
		} else {
			echo "Please check your link!";
		}
	} else {
		header("Location: login.php");
		exit();
	}
?>