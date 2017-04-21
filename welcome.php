<?php session_start();
	 if(isset($_SESSION['userName']))
	 {
	 
		echo'<h1>WELCOME ' . $_SESSION['userName'] . '</h1>';
		echo'<img src="profilepic/' . $_SESSION['userName'] . '.jpg" width="200px" height="200px" <br>';
		echo'<br> <h1> <a href="logout.php">LOGOUT</a> </h1>';
	 } 
	 else
	 {
	 	echo 'You are not logged In <br>';
		echo'<a href="index.php">LOGIN</a>';
		
	 }
?>