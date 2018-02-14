<?php
session_start();
	include('includes/admin_db.php');

	if(isset($_POST['submit']))
	{	
		 $img_name = $_FILES['img']['name'];
		 $img_type = $_FILES['img']['type'];
		 $img_size = $_FILES['img']['size'];
		 $img_tmp = $_FILES['img']['tmp_name'];
		 $title = $_POST['post_title'];
		 $date = date('y-m-d');
		 $near_place = $_POST['near_place'];
		 $p_info = $_POST['post_info'];
		
		
		 if($img_type=="image/jpeg" or $img_type=="image/png" or $img_type=="image/gif" )//or $img_type=="uploads/jpg")
			{
				/* if($img_name == $img_tmp)
					{
						echo "<script>alert('image is already uploaded......... please try to upload new images....');</script>";
						echo "<script>window.open('admin_home.php');</script>";
					}
				*/
				if($img_size<=80000)
				{
					move_uploaded_file($img_tmp,"uploads/$img_name");
				}
				else
				{
					echo "<script>alert('image is larger than 80 kb ');</script>";
					echo "<script>window.open('admin_home.php','_self');</script>";
					exit();
				}
			}
		
			else
			{
				echo "<script>alert('image type is invalid');</script>";
			}
			
			//$query = "insert into posts (post_img,post_title,near_place,post_info,post_date) values ('$img_name','$title','$near_place','$p_info','$date')";
			
			$query = "INSERT INTO  `admin`.`posts` (`post_img` ,`post_title` ,`near_place`,`post_info` ,`post_date`) values ('$img_name','$title','$near_place','$p_info','$date')";

			if(mysqli_query($con,$query))
			{
				$_SESSION['succ']="Post has been Uploaded Successfully...";
				header('location:admin_update.php');
			}
	}
	
?>