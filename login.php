<?php session_start();
include("config.php");
if(isset($_POST['login']))
{
	$userName = secure($_POST['username'], $mysqli);
	$pass =  secure($_POST['password'], $mysqli);
	
	$q = "SELECT * FROM tbl_members WHERE username = '$userName' AND pass = '$pass'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['userName'] = $userName;
			header("Location:welcome.php");
			exit;
		}
		else
		{
			echo'<script>alert("INVALID USERNAME OR PASSWORD");</script>';
			header("Location:index.php");
			exit;
		}
	}
}
?>