<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>HoliDaySpot</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
					<?php 
						include('includes/admin_db.php');
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
				<center>
					<div class="col-lg-12 col-md-12 table-responsive">
					
								<h3>All Holiday Spots</h3><br/>
								<?php
								if($_SESSION['success']!="")
								{
								?>
								<div class="alert alert-success">
									<strong>Success!</strong> Post has been Deleted...
								</div>	
								<?php
								}else if($_SESSION['succ']!="")
								{
								?>
								<div class="alert alert-success">
									<strong>Success!</strong> Post has been Uploaded...
								</div>
								<?php
								}
								$q_sel_posts="Select * from posts";
								$r_sel_posts=mysqli_query($con,$q_sel_posts);
								
								$count=mysqli_num_rows($r_sel_posts);
								
								if($count>0)
								{
								$i=1;
								?>
								<table class="table table-striped" style="width:80%; margin-left:auto; margin-right:auto;border:2px solid #BA254A">
								<thead>
									<tr>
										<th>Sr. No</th><th>Edit</th><th>Delete</th>
										<th>Title</th><th>Photo</th><th>Nearby Place</th>
										<th>Details</th><th>Date Inserted</th>
									</tr>
								</thead>
								<tbody>
								<?php
								while($data=mysqli_fetch_assoc($r_sel_posts))
								{
								$p_info = substr($data['post_info'],0,200);
								?>
									<tr>
										<td><?php echo $i?></td>
										<td><a href="edit_post.php?post=<?php echo $data['post_id']; ?>"><img src="images/edit.ico" style="height:40px; width:40px"/></a></td>
										<td><a href="delete_post.php?post=<?php echo $data['post_id']; ?>"><img src="images/delete.png" style="height:30px;width:40px"/></a></td>
										<td><?php echo $data['post_title'];?></td>
										<td><img src="uploads\<?php echo $data['post_img']; ?>" style="width:80px; height:80px;"></img></td>
										<td><?php echo $data['near_place'];?></td>
										<td><p style="word-wrap: break-word;"><?php echo $p_info;?></p></td>
										<td><?php echo $data['post_date'];?></td>
									</tr>								
								<?php
								$i++;
								}
								?>
	
								</tbody>
								</table>
								<?php
								}else
								{
								?>
								<div class="container">
								  <div class="alert alert-danger">
									<strong>Opps!</strong> There is no Post to Show.
								  </div>
								</div>
								<?php
								}
								?>								
                   </div>
				   </center>
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

<?php
	unset($_SESSION['success']);
	unset($_SESSION['succ']);
?>