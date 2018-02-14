<?php
	session_start();
	session_destroy();
	
	
	include('includes/admin_db.php');
	
	if($_SESSION['uname']==0)
	{
		echo"<script>alert('Successfully Logged Out....');</script>";
		echo"<script>window.open('admin_login.html','_self');</script>";
	}
?>