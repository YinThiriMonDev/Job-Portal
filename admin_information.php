<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Admin Dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!----css3---->
	<link rel="stylesheet" href="css/custom.css">


	<!--google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


	<!--google material icon-->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

</head>

<body>

	<?php
	$conn = mysqli_connect('localhost', 'root', '', 'jpp');

	// Check if the connection was successful
	if (!$conn) {
		die('Connection error: ' . mysqli_connect_error());
	}

	// Check if the search form was submitted
	if (isset($_POST['admin_name'])) {
		$search_name = $_POST['admin_name'];
		// Prepare the SQL statement
		$query = "SELECT * FROM admin WHERE Admin_Name LIKE '%$search_name%'";
	} else {
		// Default query to fetch all employers
		$query = "SELECT * FROM admin";
	}

	// Execute the query
	$result = mysqli_query($conn, $query);

	// Check if the query was successful
	if (!$result) {
		die('Query error: ' . mysqli_error($conn));
	}
	?>




	<div class="wrapper">

		<div class="body-overlay"></div>



		<div id="sidebar">
			<div class="sidebar-header">
				<h3><img src="images/default.png" class="img-fluid" /><span><a href="home.php"><b> Job Portal</b></a></span>
				</h3>
				</h3>
			</div>
			<ul class="list-unstyled component m-0">

				<li class="dropdown">
					<a href="admin_information.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">perm_identity</i>Admin Information
					</a>
				</li>
				<li class="dropdown">
					<a href="employerdashboard.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">account_circle</i>Employer Information
					</a>
				</li>


				<li class="dropdown">
					<a href="jobseekerdashboard.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">account_box</i>Job Seeker Information
					</a>
				</li>

				<li class="dropdown">
					<a href="jobinfo.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">search</i>Job Information
					</a>
				</li>

				<li class="dropdown">
					<a href="employer_date_filter.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">alarm</i>Employer Info Date Filter
					</a>
				</li>
				<li class="dropdown">
					<a href="job_seeker_date_filter.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">alarm</i>job Seeker Info Date Filter
					</a>
				</li>

				<li class="dropdown">
					<a href="job_filter_date.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">alarm</i>Job Info Date Filter
					</a>
				<li class="dropdown">
					<a href="change_pwd_admin.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">key</i>Change password
					</a>
				</li>
				<li class="dropdown">
					<a href="message.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">comment</i>Messages
					</a>
				</li>


				<li class="dropdown">
					<a href="home.php" class=""><i class="material-icons">logout</i>Log Out </a>
				</li>
			</ul>
		</div>





		<div id="content">



			<div class="top-navbar">
				<div class="xd-topbar">
					<div class="row">
						<div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
							<div class="xp-menubar">
								<span class="material-icons text-white">signal_cellular_alt</span>
							</div>
						</div>

						<div class="col-md-5 col-lg-3 order-3 order-md-2">
							<div class="xp-searchbar">
								<form method="POST" action="">
									<div class="input-group">
										<input type="search" class="form-control" name="admin_name" placeholder="Enter admin name">
										<div class="input-group-append">
											<button class="btn" type="submit" id="button-addon2">Go
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
							<div class="xp-profilebar text-right">
								<nav class="navbar p-0">
									<ul class="nav navbar-nav flex-row ml-auto">
										<li class="dropdown nav-item active">
											<a class="nav-link" href="#" data-toggle="dropdown">
												<span class="material-icons">notifications</span>
												<span class="notification">4</span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="#">You Have 4 New Messages</a></li>
												<li><a href="#">You Have 4 New Messages</a></li>
												<li><a href="#">You Have 4 New Messages</a></li>
												<li><a href="#">You Have 4 New Messages</a></li>
											</ul>
										</li>

										<li class="nav-item">
											<a class="nav-link" href="#">
												<span class="material-icons">question_answer</span>
											</a>
										</li>

										<li class="dropdown nav-item">
											<a class="nav-link" href="#" data-toggle="dropdown">
												<img src="img/user.jpg" style="width:40px; border-radius:50%;" />
												<span class="xp-user-live"></span>
											</a>
											<ul class="dropdown-menu small-menu">
												<li><a href="#">
														<span class="material-icons">person_outline</span>
														Profile
													</a></li>
												<li><a href="#">
														<span class="material-icons">settings</span>
														Settings
													</a></li>
												<li><a href="#">
														<span class="material-icons">logout</span>
														Logout
													</a></li>

											</ul>
										</li>


									</ul>
								</nav>
							</div>
						</div>

					</div>

					<div class="xp-breadcrumbbar text-center">
						<h4 class="page-title">Admin Informatin Dashboard</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><span><a href="home.php"><b> Job Portal</b></a></span>
								</h3>
							</li>
							<li class="breadcrumb-item active" aria-curent="page">Group-5</li>
						</ol>
					</div>


				</div>
			</div>
			<!------top-navbar-end----------->


			<!------main-content-start----------->

			<div class="main-content" style="min-height:75vh;">
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrapper">

							<div class="table-title">
								<div class="row">
									<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
										<h2 class="ml-lg-2">Manage Job Seekers</h2>
									</div>
									<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
										<a href="admin_registration.php" class="btn btn-success" data-toggle="modal">
											<i class="material-icons">&#xE147;</i>
											<span>Add New Admin </span>
										</a>

									</div>
								</div>
							</div>

							<table class="table table-striped table-hover">
								<thead>
									<tr>

										<th>Admin ID</th>
										<th>Admin Name</th>
										<th>Admin Password</th>
										<th>Security Answer</th>
										<th>Delete</th>

									</tr>
								</thead>

								<tbody>
									<?php while ($row = mysqli_fetch_assoc($result)) :
										$pass = md5($row['Admin_Password']);
									?>
										<tr>
											<td><?php echo $row['Admin_ID']; ?></td>
											<td><?php echo $row['Admin_Name']; ?></td>
											<td><?php echo $pass; ?></td>
											<td><?php echo $row['AnswerOne']; ?></td>



											<td><a href="delete_admin_info.php?did=<?php echo $row['Admin_ID'] ?>" class="delete" data-toggle="modal">
													<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
												</a></td>
										</tr>
									<?php endwhile; ?>

								</tbody>


							</table>

							<div name="back_button" class="back_button_div">
								<a href="admin_information.php"> <button class="back_button" style="float:right"><span>Back </span></button>
							</div>

						</div>
					</div>


					<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Add Employees</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="emil" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Address</label>
										<textarea class="form-control" required></textarea>
									</div>
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" required>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-success">Add</button>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Edit Employees</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="emil" class="form-control" required>
									</div>
									<div class="form-group">
										<label>Address</label>
										<textarea class="form-control" required></textarea>
									</div>
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" required>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-success">Save</button>
								</div>
							</div>
						</div>
					</div>

					<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Delete Employees</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Are you sure you want to delete this Records</p>
									<p class="text-warning"><small>this action Cannot be Undone,</small></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-success">Delete</button>
								</div>
							</div>
						</div>
					</div>






				</div>
			</div>







			<footer class="footer">
				<div class="container-fluid">
					<div class="footer-in">
						<p class="mb-0">&copy 2023 All Rights Reserved by Group-5</p>
					</div>
				</div>
			</footer>




		</div>

	</div>











	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			$(".xp-menubar").on('click', function() {
				$("#sidebar").toggleClass('active');
				$("#content").toggleClass('active');
			});

			$('.xp-menubar,.body-overlay').on('click', function() {
				$("#sidebar,.body-overlay").toggleClass('show-nav');
			});

		});
	</script>





</body>

</html>