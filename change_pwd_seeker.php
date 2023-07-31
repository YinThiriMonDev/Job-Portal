<?php 
include 'admin/confs/Connection.php';
session_start();

if(isset($_POST['Register'])){
    $email = $_POST['Email'];
    // $current_pwd = $_SESSION['pass_retrieve'];
    $current_pwd = $_POST['User_Password'];
    $new_pwd = $_POST['User_Password_New'];
    $con_pwd = $_POST['Con_Password'];

    if(empty($email)){
        $error_message="Email required";
    }elseif(empty($current_pwd) || empty($new_pwd) || empty($con_pwd)){
        $error_message="Password required";
    }
    else{
        $check_email = "SELECT * FROM job_seeker WHERE Email = '$email'";
        $grab = mysqli_query($conn, $check_email);
        $result = mysqli_fetch_assoc($grab);
        if($result < 1){
            $error_message = "Email Not Found";
        }
        else{
            if($result['User_Password'] != $current_pwd){
                $error_message = "Current Password Incorrect";
            }
            elseif($new_pwd != $con_pwd){
                $error_message = "Passwords are not same";
            }
            elseif(strlen($new_pwd) < 6){
                $error_message = "Password must be longer than six characters";
            }
            elseif($result){
                $change_pwd = "UPDATE job_seeker SET User_Password = '$new_pwd' WHERE Email = '$email' ";
                $fetch = mysqli_query($conn, $change_pwd);
                if($fetch){
                    header("location:user_login.php");
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
                    <span class="details">Enter your email</span>
                    <input type="text" id="secu-que" placeholder="Enter your email (seeker)" name="Email">
                </div>
                <div class="input-box">
                    <span class="details">Enter your current password</span>
                    <input type="text" id="secu-que" placeholder="Enter your password" name="User_Password">
                </div>
                <div class="input-box">
                    <span class="details">Enter your new password</span>
                    <input type="text" id="secu-ans" placeholder="Enter new password" name="User_Password_New">
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
            // if(isset($error_message)){
            //     echo $error_message;
            // }
            // if(isset($error_message)){
            //     echo $error_message;
            // }

            ?>
            <!-- <form method='post' action='#' enctype='multipart/form-data'> -->
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