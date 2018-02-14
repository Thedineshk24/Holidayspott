<?php
	session_start();
	$uname=$_POST['uname'];
	$upass=$_POST['upass'];
	
	
	include('includes/admin_db.php');
	
	$q="select * from login where uname='$uname' AND upass='$upass'";
	
	$query=mysqli_query($con,$q);
	$num=mysqli_num_rows($query);
	
	
	if($num>0)
	{
		echo"<script>alert('welcome Admin How Are You......');</script>";
		$_SESSION['username']=$uname;//fit session varible for Echo it on Home.php 
		echo"<script>window.open('admin_home.php','_parent');</script>";
	}
	else
	{
		echo"<script>alert('login failed');</script>";
		echo"<script>window.open('admin_home.php','_self');</script>";
	}
?>