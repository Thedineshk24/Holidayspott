<?php
	
	session_start();
	include('includes/admin_db.php');
	
	$delete_id = $_GET['post'];
	
	$q_del_posts = "delete from posts where post_id='$delete_id'";
	$r_del_posts = mysqli_query($con,$q_del_posts);
	
	//$num = mysqli_num_rows($r_del_posts);
	
	if($r_del_posts)
	{
		
		$_SESSION['success']="Post Deleted Successfully...";
		header('location:admin_update.php');
	}
	else
	{
		echo "<script>alert('delete not successfull');</script>";
		header('location:delete_post.php?post='.$delete_id);	
	}
?>