<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
<?php
    $usr = $_SESSION['usr'];
?>
    <title><?php echo $usr ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <title>Job Listing page</title>
    <link rel="stylesheet" href="css/job_listing.css">

    <style>

    </style>
</head>

<body>
    <header>

    </header>
    <script src="js/main1.js"></script>

    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'jpp');

    // Check if the connection was successful
    if (!$connection) {
        die('Connection error: ' . mysqli_connect_error());
    }

    // Check if the search form was submitted
    if (isset($_POST['Job_Name'])) {
        $search_name = $_POST['Job_Name'];
        // Prepare the SQL statement
        $query = "SELECT * FROM job WHERE Job_Name LIKE '%$search_name%'";
    } else {
        // Default query to fetch all employers
        $query = "SELECT job.*, employer.Company_Name AS Company_Name
        FROM job
        INNER JOIN employer ON job.Employer_ID = employer.Employer_ID;
        ";
    }

    // Execute the query
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if (!$result) {
        die('Query error: ' . mysqli_error($connection));
    }

    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Welcome <b>Job Seeker</b></h3>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="status_alert.php"><i class="fa fa-briefcase"></i> Job Status</a></li>

                            <li><a href="../logout.php"><i class="fa fa-arrow-circle-o-right"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="search_div">
                    <form method="POST" action="">
                        <div class="search-container">
                            <input type="text" class="search-input" name="Job_Name" placeholder="Enter name">
                            <input type="submit" value="Search" class="search-button">

                        </div>
                </div>
                </form>
                <table border="" cellpadding="">

                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <th>
                                <tr>
                                    <td class="job_name_td"><?php echo $row['Job_Name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="salary_td">Salary : <?php echo $row['Salary']; ?></td>
                                </tr>
                                <tr>
                                    <td class="company_name_td">Company Name : <?php echo $row['Company_Name']; ?></td>
                                </tr>
                                <tr>
                                    <td class="description_td"><?php echo $row['Description']; ?></td>



                                </tr>
                                <tr>
                                    <td class="requirements_td"><?php echo $row['Requirements']; ?></td>
                                </tr>
                                <tr>
                                    <td class="location_td"><?php echo $row['Location']; ?></td>
                                </tr>
                                <tr>
                                    <form method="POST" enctype="multipart/form-data" action="apply_job.php">
                                        <td>

                                        <?php
                                            $usrSession = $_SESSION['usr'];
                                            $usrSql = "SELECT User_ID FROM job_seeker WHERE User_Name = '$usrSession'";
                                            $usrResult = mysqli_query($connection, $usrSql);
                                            $row2 = mysqli_fetch_assoc($usrResult);
                                        ?>

                                        <input name="User_ID" value="<?php echo $row2['User_ID'];?>"hidden>

                                            <input type="" name="Job_ID" value="<?php echo $row['Job_ID']; ?>" hidden>
                                            <button type="submit" class="btn_edit" name="Apply">Apply</button>
                                        </td>
                                    </form>



                                </tr>
                            </th>

                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <div name="back_button" class="back_button_div">
                <a href="job_listing.php"> <button class="back_button" style="vertical-align:middle"><span>Back </span></button>
            </div>
        </div>
    </div>
    <?php
    mysqli_free_result($result);
    mysqli_close($connection);
    ?>


</body>

</html>