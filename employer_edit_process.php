
<?php
include 'admin/confs/Connection.php';
$Employer_ID=$_POST['Employer_ID'];
$Company_Name = $_POST['Company_Name'];
$Company_Email = $_POST['Company_Email'];
$Company_Phone = $_POST['Company_Phone'];
$Password = $_POST['Password'];



$sql = $conn->prepare("UPDATE employer SET Employer_ID=?, Company_Name=?, Company_Email=?, Company_Phone=?, Password=? WHERE Employer_ID=?");
$sql->bind_param("issssi", $Employer_ID, $Company_Name, $Company_Email, $Company_Phone, $Password, $Employer_ID);
$sql->execute();

//$sql->execute();
header('Location: employerdashboard.php');
?>
