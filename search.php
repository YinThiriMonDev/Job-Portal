<?php
include("admin/confs/Connection.php");
$conn = mysqli_connect('localhost', 'root', '', 'jpp');

// Check if the connection was successful
if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}

if(isset($_POST['Company_Name'])){
    $search_name = $_POST['Company_Name'];
    $query = "SELECT applying_jobs.*, job_seeker.User_Name, job.Job_Name FROM applying_jobs
     INNER JOIN job_seeker ON applying_jobs.User_ID = job_seeker.User_ID
     INNER JOIN job ON applying_jobs.Job_ID = job.Job_ID WHERE job_seeker.User_Name = '$search_name';";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if (!$result) {
        die('Query error: ' . mysqli_error($conn));
    }
    else{

    $jobs = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $jobs[] = $row;
    }
    echo json_encode($jobs);

    }

}
?>