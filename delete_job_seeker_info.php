<?php
include 'admin/confs/Connection.php';

if (isset($_GET['did'])){
    $did = $_GET['did'];
    $delete=mysqli_query($conn,"DELETE FROM job_seeker
     WHERE User_ID ='$did'"); // fatal error  means SQL sysntax error

header('Location: jobseekerdashboard.php');
}
?>
