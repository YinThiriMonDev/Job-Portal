<?php
include 'admin/confs/Connection.php';

$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];

$sql="INSERT INTO users(username, email, contact, message) VALUES ('$username','$email','$contact','$message')";

$result=mysqli_query($conn, $sql);

if($result){
    header('Location: contactus.php');
}

?>