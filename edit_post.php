<?php
	session_start();
	include('includes/admin_db.php');
	$post=$_GET['post'];
	echo $q_sel_posts="select * from posts where post_id='$post'";
	$r_sel_posts=mysqli_query($con,$q_sel_posts);
	
	$data=mysqli_fetch_assoc($r_sel_posts);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Update Post</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
					<?php 
						// if some-one  directly try to access admin area then following (if) statement will redirect it to admin_login.html page 
						if($_SESSION['username'])
						{
							echo $_SESSION['username'];
						}
						else
						{
							echo "<script>window.open('admin_login.html','_self');</script>";
						}
					?>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="admin_home.php">
                        <i class="pe-7s-graph"></i>
                        <p>New Post's</p>
                    </a>
					
					<a href="admin_update.php">
                        <i class="pe-7s-graph"></i>
                        <p>Edit Post's</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="bg bg-danger">
                           <a href="logout.php">
                              <b>Logout</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
					<div class="col-lg-8 col-md-8 form-group">
								<h3>New Holiday Spot</h3><br/>
								<form method="POST" action="insert.php" enctype="multipart/form-data" class="form form-group">
									<div class="col-lg-12 col-md-12" style="background-color:">
										<label>Old Image:</label><br/>
										<img src="uploads/<?php echo $data['post_img']; ?>"  style="width:100px; height:100px"/></br><br/>
										<label>Change Image</label>
										<input type="file" name="img" required />
									</div>
									
									<div class="col-lg-12 col-md-12" style="background-color:">
										<br/>
										<label>Enter Title</label>
										<input type="text" name="post_title" value="<?php echo $data['post_title']; ?>" required class="form-control"/>
									</div>
									<div class="col-lg-12 col-md-12" style="background-color:">
											<label>Near Place</label>
											<input type="text" name="near_place" value="<?php echo $data['near_place']; ?>" required class="form-control"/>
									</div>
									<div class="col-lg-12 col-md-12" style="background-color:">
										<label>Enter Post's info</label>
										<textarea name="post_info" rows="12" required class="form-control"><?php echo $data['post_info']; ?></textarea>
									</div>
									<div class="col-lg-12 col-md-12" style="background-color:"><br/>
										<center><input type="submit" name="submit" value="Update" class="btn btn-info" /></center>
									</div>
								</form>
                   </div>
				</div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">HoliDay Spot</a>, made with love for a better Travel
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
