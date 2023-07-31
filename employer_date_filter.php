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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<div class="wrapper">

    <div class="body-overlay"></div>

    <!-------sidebar--design------------>

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
            </li>
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


            <li class="">
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
                                            <img src="images/pm.jpg" style="width:40px; border-radius:50%;" />
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
                    <h4 class="page-title">Admin Dashboard</h4>
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

        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrapper">

                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h2 class="ml-lg-2">Manage Employer Info Date Filter</h2>
                                </div>
                            </div>
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

                <body>
                    <div>
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Filter</label>
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "jpp");

                                if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                                    $from_date = $_GET["from_date"];
                                    $to_date = $_GET["to_date"];

                                    // Escape the input to prevent SQL injection
                                    $from_date = mysqli_real_escape_string($con, $from_date);
                                    $to_date = mysqli_real_escape_string($con, $to_date);

                                    $query = "SELECT * FROM employer WHERE Created_at BETWEEN '$from_date' AND '$to_date'";
                                    $query_run = mysqli_query($con, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                ?>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Employer ID</th>
                                                        <th>Company Name</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Company Phone</th>
                                                        <th>Created_at</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($row = mysqli_fetch_assoc($query_run)) { ?>
                                                        <tr>
                                                            <td><?= $row['Employer_ID']; ?></td>
                                                            <td><?= $row['Company_Name']; ?></td>
                                                            <td><?= $row['Company_Email']; ?></td>
                                                            <td><?= $row['Password']; ?></td>
                                                            <td><?= $row['Company_Phone']; ?></td>
                                                            <td style="font-size: 15px" ;><?php
                                                                                            $dateString = $row['Created_at'];
                                                                                            $date = new DateTime($dateString);
                                                                                            $formattedDate = $date->format("d F Y");
                                                                                            echo $formattedDate;
                                                                                            ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                <?php
                                    } else {
                                        echo "No Record Found";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </body>

</html>