<?php
include 'Connection.php';
$did = $_GET['did'];
$sql=$db->prepare("DELETE FROM job_seeker WHERE User_ID='$did'");
$sql->execute();
header('Location: admindashboard.php');
?>
