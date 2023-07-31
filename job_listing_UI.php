<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <?php
  $usr = $_SESSION['usr'];
  ?>

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
  <!DOCTYPE html>
  <html>

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/job_listing.css">
    <link rel="stylesheet" href="css/job.css">
    <title><?php echo $usr ?></title>
  </head>

<body>
<div class="nav" id="nav">
            <nav class="nav__content">
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-chevron-right' ></i>
                </div>

                <a href="#" class="nav__logo">
                    <img src="images/default.png" style="width:40%; height:20%; border-radius: 50%;">
                    <span class="nav__logo-name">Job Seeker Panel</span>
                </a>

                <div class="nav__list">
                    <a href="job_listing_UI.php" class="nav__link">
                    <i class='bx bx-list-ul'></i>
                        <span class="nav__name">Job Listings</span>
                    </a>

                    <a href="change_pwd_seeker.php" class="nav__link">
                        <i class='bx bx-key' ></i>

                        <span class="nav__name">Change password</span>
                    </a>

                    <a href="receive_status.php" class="nav__link">
                        <i class='bx bx-bar-chart-square' ></i>
                        <span class="nav__name">View Status</span>
                    </a>

                    <a href="home.php" class="nav__link">
                    <i class='bx bx-exit'></i>
                        <span class="nav__name">Logout</span>
                    </a>
                </div>
            </nav>
        </div>

  <main class="container section">
    <!-- Jobs Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">

          <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="job-item p-4 mb-4">
                  <div class="row g-4" style="border-style:solid; border-width:2px; border-radius: 12px;
  padding: 5px;">
                    <div class="col-sm-12 col-md-8 d-flex align-items-center">

                      <div class="text-start ps-4">
                        <h5 class="mb-3"><?php echo $row['Job_Name']; ?></h5>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row['Location']; ?></span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i> <?php echo $row['Salary']; ?></span>
                        <span class="text-truncate me-3"><i class="far fa-money-bill-alt text-primary me-2"></i> <?php echo $row['Company_Name']; ?></span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i> <?php echo $row['Description']; ?></span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i> <?php echo $row['Requirements']; ?></span>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                      <div class="d-flex mb-3">
                        <form method="POST" enctype="multipart/form-data" action="apply_job.php">
                          <td>

                            <?php
                            $usrSession = $_SESSION['usr'];
                            $usrSql = "SELECT User_ID FROM job_seeker WHERE User_Name = '$usrSession'";
                            $usrResult = mysqli_query($connection, $usrSql);
                            $row2 = mysqli_fetch_assoc($usrResult);
                            ?>

                            <input name="User_ID" value="<?php echo $row2['User_ID']; ?>" hidden>

                            <input type="" name="Job_ID" value="<?php echo $row['Job_ID']; ?>" hidden>

                            <button class="btn btn-primary" name="Apply">
                              Apply Now
                            </button>

                          </td>
                        </form>

                      </div>
                      <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i> <?php echo $row['Created_at']; ?></small>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>

            </div>

          </div>
        </div>
      </div>
    </div>
  </main>


  <script src="js/main1.js"></script>
  <script src="assets/js/main.js"></script>

  <?php
    mysqli_free_result($result);
    mysqli_close($connection);
    ?>

</body>

</html>