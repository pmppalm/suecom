<?php
	session_start();

	if (isset($_SESSION["email"]) && isset($_SESSION["loggedIn"])) {
		header("Location: index.php");
		exit();
	}

	if (isset($_POST["logIn"])) {
		$connection = new mysqli("localhost", "root", "", "membershipSystem");
		
		$email = $connection->real_escape_string($_POST["email"]);
		$password = sha1($connection->real_escape_string($_POST["password"]));
		$data = $connection->query("SELECT firstName FROM users WHERE email='$email' AND password='$password'");

		if ($data->num_rows > 0) {
			$_SESSION["email"] = $email;
			$_SESSION["loggedIn"] = 1;


			
			header("Location: index.php");
			exit();

		} else {
			
			echo "Please check your inputs!";
		}
	}	
?>      
<html>
<body>            
	<form action="login.php" method="post"> 			 	                    			
    	<input type="text" name="email" placeholder="Email"/><br />															
		 <input type="password" name="password" placeholder="Password"/> <br />						                        
		   <input type="submit" value="Log In" name= "logIn" > 	
		   <<a href="forgotPassword.php">forgotPassword ?</a>
    </form>    
</body>
</html>

<?php 
    include('connectDB.php');
    if(isset($_POST['submit'])){
     $username = $_POST['username'];
     $password = $conn->real_escape_string($_POST['password']);
     
     $sql = "SELECT * FROM member WHERE username = '".$username."' AND password = '".$password."'" ;
     $sql2 ="SELECT * FROM member WHERE username = '".$username."'" ;
     $sql3 ="SELECT * FROM member WHERE username = '".$password."'" ;
     $result=$conn->query($sql);
     $result2=$conn->query($sql2);
     $result3=$conn->query($sql3);
    if($result->num_rows > 0){
     $row = $result->fetch_assoc();
     $_SESSION['id'] = $row['id'];
     $_SESSION['name'] = $row['name'];
     header('location:index.php');
    }
   
    }
    ?>