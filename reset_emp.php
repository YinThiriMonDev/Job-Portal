<?php
session_start();
include 'admin/confs/Connection.php';


if (isset($_POST['Submit'])) {
    $email = $_SESSION['email_retrieve'];
    $pass = $_POST['Password'];
    $cpass = $_POST['Confirm_Password'];

    $check_pass = "SELECT * FROM employer WHERE Company_Email = '$email'";
    $data = mysqli_query($conn, $check_pass);
    $result = mysqli_fetch_array($data);

    // if($result < 0){
    //     $error_message = "Fail";
    // }
    if (empty($pass)) {
        $error_message = "Password is required";
    } elseif (empty($cpass)) {
        $error_message = "Password is required";
    } elseif ($pass != $cpass) {
        $error_message = "Passwords must be same";
        // header("location:reset_seeker.php?pass=not_same");
    } elseif (strlen($pass) < 6) {
        $error_message = "Password must be longer than six characters";
    }
    elseif($result) {

        $reset_pwd = "UPDATE employer SET Password = '$pass' WHERE Company_Email = '$email'";
        $update = mysqli_query($conn, $reset_pwd);
        if ($update) {
            header("location:employer_login.php");
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
    <title>Password Reset</title>
</head>

<body>
    <div class="container">
        <div class="title">Reset Password</div>
        <div class="content">

        </div><br>
        <form method="POST" action="" enctype="multipart/form-data">
            <?php

            $emp_mail = $_SESSION['email_retrieve'];
            ?>
            <span name="Email" value="<?php echo $emp_mail?>"></span>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Enter New Password</span>
                    <input type="password" id="new-pwd" placeholder="Password must be longer than 6 characters" name="Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Retype Password</span>
                    <input type="password" id="retype-pwd" placeholder="Password must be same" name="Confirm_Password" required>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="Submit">
                </div>
        </form>
        <div class="error_message">
            <?php
            if (isset($error_message)) {
                print_r($error_message);
            }

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