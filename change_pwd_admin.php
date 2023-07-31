<?php
include 'admin/confs/Connection.php';
session_start();

if(isset($_POST['Register'])){
    $name = $_POST['Admin_Name'];
    // $current_pwd = $_SESSION['pass_retrieve'];
    $current_pwd = $_POST['Admin_Password'];
    $new_pwd = $_POST['Admin_Password_New'];
    $con_pwd = $_POST['Con_Password'];

    if(empty($name)){
        $error_message="Name required";
    }elseif(empty($current_pwd) || empty($new_pwd) || empty($con_pwd)){
        $error_message="Password required";
    }
    else{
        $check_name = "SELECT * FROM admin WHERE Admin_Name = '$name'";
        $grab = mysqli_query($conn, $check_name);
        $result = mysqli_fetch_assoc($grab);
        if($result < 1){
            $error_message = "Name Not Found";
        }
        else{
            if($result['Admin_Password'] != $current_pwd){
                $error_message = "Current Password Incorrect";
            }
            elseif($new_pwd != $con_pwd){
                $error_message = "Passwords are not same";
            }
            elseif(strlen($new_pwd) < 6){
                $error_message = "Password must be longer than six characters";
            }
            elseif($result){
                $change_pwd = "UPDATE admin SET Admin_Password = '$new_pwd' WHERE Admin_Name = '$name' ";
                $fetch = mysqli_query($conn, $change_pwd);
                if($fetch){
                    header("location:admindashboard.php");
                }
            }

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/seeker_registration.css">
    <title>Security Question</title>
</head>

<body>
    <div class="container">
        <div class="title">Security Questions</div>
        <div class="content">

        </div><br>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Enter your user name</span>
                    <input type="text" id="secu-que" placeholder="Enter your user name" name="Admin_Name">
                </div>
                <div class="input-box">
                    <span class="details">Enter your current password</span>
                    <input type="text" id="secu-que" placeholder="Enter your password" name="Admin_Password">
                </div>
                <div class="input-box">
                    <span class="details">Enter your new password</span>
                    <input type="text" id="secu-ans" placeholder="Enter new password" name="Admin_Password_New">
                </div>
                <div class="input-box">
                    <span class="details">Retype your new password</span>
                    <input type="text" id="secu-ans" placeholder="Retype new password" name="Con_Password">
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="Register">
                </div>
        </form>
        <div class="error_message">
            <?php
            if (isset($error_message)) {
                print_r($error_message);
            }


            ?>
        </div>
        <div class="succession">
            <?
            if (isset($succession)) {
                echo $succession;
                print_r($succession);
            }
            if (isset($fail)) {
                echo $fail;
            }
            ?>
        </div>
        <div>
        </div>
</body>

</html>