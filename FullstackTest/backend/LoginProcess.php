<?php 
	require 'Connection.php';
	if (isset($_POST['username'])) 
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT * FROM Users WHERE username='".$username."' LIMIT 1";

		$result=mysqli_query($conn,$sql);
		$data=$result->fetch_array();

		if (mysqli_num_rows($result)==1 && password_verify($password, $data['password'])) {
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['id']=$data['id'];

			header("location: ../Index.php");
		}
		else
		{
			header("location:../Index.php?error=Your user name or password was incorrect. <br> Please try it again.");
		}
	}
?>