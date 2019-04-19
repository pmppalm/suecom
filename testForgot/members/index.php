<?php
	require ("logincheck.php");
?> 
    
<html>
	<body>
		Welcome <?php echo $_SESSION["email"] ?>.
		<a href="logout.php">Logout</a>
	</body>
</html>