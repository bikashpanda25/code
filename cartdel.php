<?php

	session_start();

	$code=$_GET['code2'];

	if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

	{

		

		header('location:login.php');

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>

<?php

	include 'dbcon.php';

	$query="delete from shopping_cart where ser_no='".$code."'";

	$rs=mysqli_query($db,$query);

	if($rs)

	{

		header('location:cartdetails.php' );

	}

?>