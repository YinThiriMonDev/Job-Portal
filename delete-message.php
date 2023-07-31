<?php
include 'admin/confs/Connection.php';

if (isset($_GET['cid'])){
    $cid = $_GET['cid'];
    $delete=mysqli_query($conn,"DELETE FROM users
     WHERE Contact_ID ='$cid'"); // fatal error  means SQL sysntax error

header('Location: message.php');
}
?>
