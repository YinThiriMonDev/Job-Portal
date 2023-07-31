<?php
include("admin/confs/Connection.php");
if (isset($_GET['uId']) && isset($_GET['jId']) && isset($_GET['status'])) {
    $uId = $_GET['uId'];
    $jId = $_GET['jId'];
    $status = $_GET['status'];

    $sqll = "UPDATE `applying_jobs` SET `Job_Status`='$status' WHERE User_ID = '$uId' AND Job_ID = '$jId';";
    $execution = mysqli_query($conn, $sqll);
    header('location: receive_job.php');
}
?>
