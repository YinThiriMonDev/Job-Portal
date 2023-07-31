<?php
include 'admin/confs/Connection.php';

if (isset($_GET['did'])){
    $did = $_GET['did'];
    $delete=mysqli_query($conn,"DELETE FROM admin
     WHERE Admin_ID ='$did'"); // fatal error  means SQL sysntax error

header('Location: admin_information.php');
}
?>
