<?php
include 'admin/confs/Connection.php';

if (isset($_GET['did'])){
    $did = $_GET['did'];
    $delete=mysqli_query($conn,"DELETE FROM applying_jobs
     WHERE Job_ID ='$did'"); // fatal error  means SQL sysntax error

header('Location: change_status.php');
}
?>
