<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

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
<style>
	.send_message {
		border-color: #2196F3;
		color: dodgerblue;
		border-radius: 10px;
		font-size: 15px;
	}

	.send_message:hover {
		background: #2196F3;
		color: white;

	}

	.approve {
		background-color: snow;
		color: black;
		border: none;
		border-radius: 10px;
		font-size: 15px;
		width: 100px;

	}

	.approve:hover {
		background-color: lightgreen;
	}

	.denied {
		background-color: snow;
		color: black;
		border: none;
		border-radius: 10px;
		font-size: 15px;
		width: 100px;

	}

	.denied:hover {
		background-color: grey;
	}

	a:hover {
		color: white !important;
	}
</style>

<body>

	<?php
	include("admin/confs/Connection.php");
	$conn = mysqli_connect('localhost', 'root', '', 'jpp');

	// Check if the connection was successful
	if (!$conn) {
		die('Connection error: ' . mysqli_connect_error());
	}

	// Check if the search form was submitted
	$result = [];
	if (isset($_POST['Company_Name'])) {
		$Company_Name = $_SESSION['employer_session'];
		$search_name = $_POST['Company_Name'];
		// Prepare the SQL statement
		$q = "SELECT * FROM job_seeker WHERE User_Name = '$search_name'";
		$qres = mysqli_query($conn, $q);

		while ($qfet = mysqli_fetch_assoc($qres)) {
			$jId = $qfet['User_ID'];
			$jName = $qfet['User_Name'];
			$cv = $qfet['cv'];

			$s = "SELECT * FROM applying_jobs WHERE User_ID = '$jId'";
			$sres = mysqli_query($conn, $s);

			while ($sfet = mysqli_fetch_assoc($sres)) {
				$sId = $sfet['Job_ID'];
				$status = $sfet['Job_Status'];

				$u = "SELECT * FROM job WHERE Job_ID = '$sId' AND Employer_ID = '$Company_Name'";
				$ures = mysqli_query($conn, $u);

				while ($ufet = mysqli_fetch_assoc($ures)) {
					$uName = $ufet['Job_Name'];

					$row['User_Name'] = $jName;
					$row['Job_Name'] = $uName;
					$row['User_ID'] = $jId;
					$row['cv'] = $cv;
					$row['status'] = $status;
					$row['Job_ID'] = $sId;

					// Process the row or do whatever you need with the data
					// Example: You can store the $row in an array for further processing
					$result[] = $row;
				}
			}
		}
	} else {
		// Default query to fetch all employers
		$Company_Name = $_SESSION['employer_session'];
		$q = "SELECT * FROM job WHERE Employer_ID = '$Company_Name'";
		$qres = mysqli_query($conn, $q);

		while ($qfet = mysqli_fetch_assoc($qres)) {
			$jId = $qfet['Job_ID'];
			$jName = $qfet['Job_Name'];

			$s = "SELECT * FROM applying_jobs WHERE Job_ID = '$jId'";
			$sres = mysqli_query($conn, $s);

			while ($sfet = mysqli_fetch_assoc($sres)) {
				$sId = $sfet['User_ID'];
				$status = $sfet['Job_Status'];

				$u = "SELECT * FROM job_seeker WHERE User_ID = '$sId'";
				$ures = mysqli_query($conn, $u);

				while ($ufet = mysqli_fetch_assoc($ures)) {
					$uName = $ufet['User_Name'];
					$cv = $ufet['cv'];

					$row['User_Name'] = $uName;
					$row['Job_Name'] = $jName;
					$row['User_ID'] = $sId;
					$row['cv'] = $cv;
					$row['status'] = $status;
					$row['Job_ID'] = $jId;

					// Process the row or do whatever you need with the data
					// Example: You can store the $row in an array for further processing
					$result[] = $row;
				}
			}
		}
		//UPDATE `applying_jobs` SET `Job_Status`='approved' WHERE User_ID = '1' AND Job_ID = '7';

		// Access the result array to retrieve the processed data
		foreach ($result as $row) {
			// Access individual row data
			$uName = $row['User_Name'];
			$jName = $row['Job_Name'];
			$sId = $row['User_ID'];
			$cv = $row['cv'];
			$status = $row['status'];
		}
	}

	?>




	<div class="wrapper">

		<div class="body-overlay"></div>

		<!-------sidebar--design------------>

		<div id="sidebar">
			<div class="sidebar-header">
				<h3><img src="images/default.png" class="img-fluid" /><span>Employer Panel</span></h3>
			</div>
			<ul class="list-unstyled component m-0">
				<li class="active">
					<a href="job_registration.php" ><i class="material-icons">open_in_browser</i>Post Job </a>
				</li>
				<li class="active">
					<a href="change_pwd_emp.php" ><i class="material-icons">key</i>Change password </a>
				</li>

				<li class="dropdown">
					<a href="receive_job.php" data-toggle="collapse" aria-expanded="false">
						<i class="material-icons">book</i>View Applicant resumes
					</a>
				</li>

				<li class="dropdown">
					<a href="home.php" class=""><i class="material-icons">logout</i>Log Out </a>
				</li>
			</ul>
		</div>

		<!-------sidebar--design- close----------->



		<!-------page-content start----------->

		<div id="content">

			<!------top-navbar-start----------->

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
										<input type="search" class="form-control" name="Company_Name" placeholder="Enter your search term">
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
						<h4 class="page-title">Employer Receive Job Dashboard</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Job Portal</a></li>
							<li class="breadcrumb-item active" aria-curent="page">Group-5</li>
						</ol>
					</div>


				</div>
			</div>
			<!------top-navbar-end----------->


			<!------main-content-start----------->

			<div class="main-content">
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrapper">

							<div class="table-title">
								<div class="row">
									<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
										<h2 class="ml-lg-2">Manage Employees</h2>
									</div>
									<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
										<a href="employer_registration.php" class="btn btn-success" data-toggle="modal">
											<i class="material-icons">&#xE147;</i>
											<span>Add New Employers</span>
										</a>

									</div>
								</div>
							</div>

							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>User ID</th>
										<th>Job ID</th>
										<th>CV</th>
										<th>Send Message</th>

									</tr>
								</thead>

								<tbody>


									<form action="" method="post" id="status_form">
										<?php
										foreach ($result as $row) {
											$uName = $row['User_Name'];
											$jName = $row['Job_Name'];
											$sId = $row['User_ID'];
											$jId = $row['Job_ID'];
										?>
											<tr>
												<td><?php echo $row['User_Name']; ?></td>
												<td><?php echo $row['Job_Name']; ?></td>
												<td><a href="admin/image/<?php echo $row['cv']; ?>" download>Download CV</a></td>
												<td>
													<button class="approve"><a href="receive_message.php?uId=<?php echo $sId ?>&jId=<?php echo $jId ?>&status=Approve">Approve</a></button>
													<button class="denied"><a href="receive_message.php?uId=<?php echo $sId ?>&jId=<?php echo $jId ?>&status=Denied">Denied</a></button>
												</td>
											</tr>
										<?php } ?>
										</td>
										</tr>
								</tbody>
							</table>

							<div name="back_button" class="back_button_div">
								<a href="receive_job.php"> <button class="back_button" style="float:right;"><span>Back </span></button>
							</div>

						</div>
					</div>
					<!----add-modal start--------->
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

					<!----edit-modal end--------->


					<!----edit-modal start--------->
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

					<!----edit-modal end--------->


					<!----delete-modal start--------->
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

					<!----edit-modal end--------->




				</div>
			</div>

			<!------main-content-end----------->



			<!----footer-design------------->

			<footer class="footer">
				<div class="container-fluid">
					<div class="footer-in">
						<p class="mb-0">&copy 2023 All Rights Reserved by Group-5</p>
					</div>
				</div>
			</footer>




		</div>

	</div>

	<!-------complete html----------->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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