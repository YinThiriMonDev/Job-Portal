
<?php
include 'admin/confs/Connection.php';
$User_ID=$_POST['User_ID'];
$Full_Name = $_POST['Full_Name'];
$User_Name = $_POST['User_Name'];
$User_Password = $_POST['User_Password'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];




$sql = $conn->prepare("UPDATE job_seeker SET User_ID=?, Full_Name=?, User_Name=?, User_Password=?, Gender=?, Email=?, Phone_Number=?
WHERE User_ID=?");
$sql->bind_param("issssssi", $User_ID, $Full_Name, $User_Name, $User_Password, $Gender, $Email, $Phone_Number , $User_ID);
$sql->execute();

//$sql->execute();
header('Location: jobseekerdashboard.php');
?>
