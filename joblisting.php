<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
    $usr = $_SESSION['usr'];
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap/min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="css\job_listing.css">
  <script src='https://kit.fontawesome.com/c8e4d183c2.js' crossorigin='anonymous'></script>
  <title><?php echo $usr ?></title>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #F78F7D;
    --secondary-color: #F6BCAD;
    --info-color: #FFDCD4;
}

body {
    font-family: 'Poppins', sans-serif;
}

a {
    text-decoration: none
}

.container {
    width: 100%;
    max-width: 1300px;
    margin: 0 auto;
}

.d-flex {
    display: flex;
    justify-content: space-between;
    align-items: center
}

header {
    position: relative;
    height: 83px;
    width: 100%;
}



nav {
    height: 83px;
    width: 100%;
    padding: 20px 0px;
}

.brand {
    color: #021300;
    font-size: 50px;
    text-transform: capitalize;
    font-weight: 900;
    margin-left: 20px;
    font-family: 'Permanent Marker', cursive;
}

.brand-text {
    color: var(--primary-color);
}

.navigation-bar ul {
    margin: 0px;
    padding: 0px;
}

.navigation-bar ul li {
    display: inline-block;
    margin: 0px 25px;
}

.navigation-bar ul li:last-child {
    margin-right: 0px;
}

.navigation-bar ul li a {
    color: #222222;
    font-size: 16px;
    font-weight: normal;
    font-weight: 600;
    text-transform: capitalize;
    animation: all 1s ease-in-out;
}

.navigation-bar ul li a:hover {
    color: var(--primary-color);
    border-bottom: 1px solid var(--secondary-color);
}

.btn {
    display: inline-block;
    padding: 10px 28px;
    color: #222222;
    background-color: var(--info-color);
    border-radius: 5px;
    font-weight: normal;
    font-weight: 600;
}

.navigation-bar ul li a.btn:hover {
    background-color: var(--primary-color);
    color: #fff;
}

.navigation-bar.active {
    display: flex;
}

.burger {
    width: 25px;
    cursor: pointer;
    display: none;
}

.burger span {
    display: block;
    margin-bottom: 3px;
    height: 3px;
    color: #021300;
    width: 100%;
    background-color: var(--primary-color);
}


@media (min-width: 991px) {
    .navigation-bar {
        display: block !important;
    }
}

@media (max-width: 991px) {
    .burger {
        display: block;
        position: absolute;
        right: 20px;
    }

    .navigation-bar {
        display: none;
        position: absolute;
        left: 0;
        top: 70px;
        width: 100%;
        background-color: var(--info-color);
        padding: 20px 0;
        text-align: center;
        justify-content: center;
        z-index: 2;
    }

    .navigation-bar ul li {
        display: block;
        margin: 15px 0;
    }

    .navigation-bar ul li a.btn {
        background-color: var(--secondary-color);
        color: #fff;
    }

    .navigation-bar ul li a:hover {
        color: var(--primary-color);
    }

    .navigation-bar ul li a.btn:hover {
        background-color: var(--primary-color);
        color: #fff;
    }


}
  </style>
</head>
<body>
<header>
        <div class="container">
            <nav class="navbar d-flex">
                <a href="#" class="brand" style="font-family: 'Poppins', sans-serif;">Job<span class="brand-text">Portal</span></a>
                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="navigation-bar">
                    <ul class="links">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="joblisting.php">Job Listings</a></li>
                        <select name="Login" class="btn" onchange="handleRegistration(this.value)">
                            <option value="">Login</option>
                            <option value="login.php">Admin</option>
                            <option value="user_login.php">User</option>
                            <option value="employer_login.php">Employer</option>
                        </select>
                        <select name="Register" class="btn" onchange="handleRegistration(this.value)">
                            <option value="">Register</option>
                            <option value="job_seeker_registration.php">Job Seeker</option>
                            <option value="employer_registration.php">Employer</option>
                        </select>

                        <script>
                            function handleRegistration(url) {
                                if (url) {
                                    window.location.href = url;
                                }
                            }
                        </script>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
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
    <br><br>
    <?php
    mysqli_free_result($result);
    mysqli_close($connection);
    ?>
    <footer class="bg-light text-dark pt-5 pb-4">
      <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info">About us</h5>
            <hr class="mb-4">
            <p>Job Portal is one of the job search platforms where you can find the widest selection of the best jobs in Myanmar. Our mission is to provide you with an easy way to search for the best job opportunities in Myanmar</p>
          </div>

          <div class="col-md-4 col-lg-4 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info">Quick Links</h5>
            <hr class="mb-4">
            <p>
              <a href="home.php" class="text-dark" style="text-decoration:none">Home</a>
            </p>
            <p>
              <a href="contactus.php" class="text-dark" style="text-decoration:none">Contact Us</a>
            </p>
            <p>
              <a href="aboutus.php" class="text-dark" style="text-decoration:none">About Us</a>
            </p>
            <p>
              <a href="blog.php" class="text-dark" style="text-decoration:none">Blog</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold text-info">Let us help</h5>
            <hr class="mb-4">
            <p>
              <li class="fas fa-home mr-3"></li> Yangon, Myanmar
            </p>
            <p>
              <li class="fas fa-envelope mr-3"></li> jobportalmyanmar@gmail.com
            </p>
            <p>
              <li class="fas fa-phone mr-3"></li> 09421084583
            </p>
          </div>

          <hr class="mb-4">
          <div class="row d-flex justify-content-center">
            <div>
              <p>
                Copyright 2023 All Rights Reserved By :
                <a href="#" style="text-decoration:none;">
                  <strong class="text-info">Group 5</strong>
              </a>
              </p>
            </div>
          </div>

          <div class="row d-flex justify-content-center">
            <div class="text-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-facebook"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-twitter"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-google-plus"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-linkedin-in"></li></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"><li class="fab fa-youtube"></li></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/main1.js"></script>
</body>
</html>