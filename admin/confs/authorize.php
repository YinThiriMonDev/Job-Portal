<?php
session_start();
if(!isset($_SESSION['auth']))
{
    header("location: index1.php");
    exit();
}
?>

