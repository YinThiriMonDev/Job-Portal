
<?php
include 'admin/confs/Connection.php';
$Job_ID=$_POST['Job_ID'];
$Job_Name = $_POST['Job_Name'];
$Salary = $_POST['Salary'];
$Employer_ID = $_POST['Employer_ID'];
$Description = $_POST['Description'];
$Requirements = $_POST['Requirements'];
$Location = $_POST['Location'];




$sql = $conn->prepare("UPDATE job SET Job_ID=?, Job_Name=?, Salary=?, Employer_ID=?, Description=?, Requirements=?, Location=?
WHERE Job_ID=?");
$sql->bind_param("issssssi", $Job_ID, $Job_Name, $Salary, $Employer_ID, $Description, $Requirements, $Location , $Job_ID);
$sql->execute();

//$sql->execute();
header('Location: jobinfo.php');
?>
