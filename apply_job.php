<?php
$connection = mysqli_connect('localhost', 'root', '', 'jpp');

// Check if the connection was successful
if (!$connection) {
    die('Connection error: ' . mysqli_connect_error());
}

if (isset($_POST['Apply'])) {
    $job_id = $_POST['Job_ID'];
    $user_id = $_POST['User_ID']; // Provide the appropriate User_ID value here

    // Prepare the INSERT query
    $insertQuery = "INSERT INTO applying_jobs (Job_ID, User_ID, Job_Status) VALUES ('$job_id', '$user_id', 'pending')";

    // Execute the INSERT query
    $result = mysqli_query($connection, $insertQuery);

    if ($result) {
        echo "<script>
        alert(' Job is Applied');
        window.location.href='job_listing_UI.php';

    </script>";
        $successMessage = "Successfully applied for the job.";
    } else {
        $errorMessage = "Error applying for the job: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
