<?php
session_start();
include 'admin/confs/Connection.php';


if (isset($_POST['Register'])) {
    $name = $_POST['Company_Name'];
    $email = $_POST['Company_Email'];
    $phone = $_POST['Company_Phone'];
    $password = $_POST['Password'];
    $con_password = $_POST['CPassword'];


    if (empty($name)) {
        $error_message = "Name is required";
    } elseif (empty($password)) {
        $error_message = "Password is required";
    } elseif (empty($con_password)) {
        $error_message = "Confirmation Password is required";
    } elseif ($password != $con_password) {
        $error_message = "Password Is Not Matched";
    } elseif (strlen($password) < 6) {
        $error_message = "Password must be longer than 6 characters.";
    } else {
        $email_validation = "SELECT * FROM employer WHERE Company_Email='$email'";
        // $dat = $db->prepare($email_validation);
        $data = mysqli_query($conn, $email_validation);
        // $dat->execute();
        $result = mysqli_fetch_array($data);
        if ($result > 0) {
            $error_message = "Email Already Exist";
        } else {
            $pass = md5($password);
            $insert = "INSERT INTO employer (Company_Name, Company_Email, Company_Phone, Password) Values('$name','$email','$phone','$password')";
            $tran = mysqli_query($conn, $insert);
            if ($tran) {
                $succession = "Successfully Registered.";
                $sqli = "SELECT * from employer WHERE Company_Name = '$name'";
                $exe = mysqli_query($conn, $sqli);
                $rest = mysqli_fetch_assoc($exe);
                $_SESSION['lastInsertEmp'] = $rest['Employer_ID'];
                // $_SESSION['pass_retrieve']=$rest['Password'];
                header("location:security_reg_emp.php");
                echo print_r([$_SESSION]);
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
    <title>Employer Registration</title>
</head>

<body>
    <div class="container">
        <div class="title">Company Registration</div>
        <div class="content">

        </div>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Company Name</span>
                    <input type="text" id="Company_Name" placeholder="Enter your name" name="Company_Name" value="<?php
                                                                                                                    if (isset($error_message)) {
                                                                                                                        echo $name;
                                                                                                                    } ?>" required>

                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" id="Company_Email" placeholder="Enter your email" name="Company_Email" value="<?php
                                                                                                                        if (isset($error_message)) {
                                                                                                                            echo $email;
                                                                                                                        } ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Company Phone Number</span>
                    <input type="text" id="Company_Phone" placeholder="Enter your phone number" name="Company_Phone" value="<?php
                                                                                                                            if (isset($error_message)) {
                                                                                                                                echo $phone;
                                                                                                                            } ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" id="Password" placeholder="Enter your password" name="Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" id="CPassword" placeholder="Enter your password" name="CPassword" required>
                </div>
                <div class="button">
                    <input type="submit" value="Register" name="Register">
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