<?php
    $conn = mysqli_connect('localhost', 'root', '', 'jpp');

    // Check if the connection was successful
    if (!$conn) {
        die('Connection error: ' . mysqli_connect_error());
    }

    // Check if the search form was submitted
    if (isset($_POST['job_seeker_name'])) {
        $search_name = $_POST['job_seeker_name'];
        // Prepare the SQL statement
        $query = "SELECT * FROM job_seeker WHERE Full_Name LIKE '%$search_name%'";
    } else {
        // Default query to fetch all employers
        $query = "SELECT * FROM job_seeker";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die('Query error: ' . mysqli_error($conn));
    }
    ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Employer Panel</title>
    </head>
    <body>
        <!--=============== NAV ===============-->
        <div class="nav" id="nav">
            <nav class="nav__content">
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-chevron-right' ></i>
                </div>

                <a href="#" class="nav__logo">
                    <img src="images/default.png" style="width:40%; height:20%; border-radius: 50%;">
                    <span class="nav__logo-name">Employer Panel</span>
                </a>

                <div class="nav__list">

                    <a href="change_pwd_emp.php" class="nav__link">
                        <i class='bx bx-key' ></i>

                        <span class="nav__name">Change password</span>
                    </a>

                    <a href="receive_job.php" class="nav__link">
                        <i class='bx bx-bar-chart-square' ></i>
                        <span class="nav__name">View Applicant Resumes</span>
                    </a>

                    <a href="#" class="nav__link">
                    <i class='bx bx-exit'></i>
                        <span class="nav__name">Logout</span>
                    </a>
                </div>
            </nav>
        </div>

        <!--=============== MAIN ===============-->
        <main class="container section">
            <h1>Job Seeker Panel</h1>
        </main>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>