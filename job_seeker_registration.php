<?php
session_start();
include 'admin/confs/Connection.php';

if (isset($_POST['Employer_Register'])) {
    $full_name = $_POST['Full_Name'];
    $name = $_POST['User_Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone_Number'];
    $password = $_POST['User_Password'];
    $con_password = $_POST['CPassword'];
    $gender = $_POST['Gender'];

    // Check if the 'CV' file input field is set
    if (isset($_FILES['CV']) && $_FILES['CV']['error'] === 0) {
        $cv = $_FILES['CV']['name'];
        $tmp = $_FILES['CV']['tmp_name'];

        if (!empty($cv)) {
            move_uploaded_file($tmp, "admin/image/$cv");
        }
    }

    if (empty($full_name)) {
        $error_message = "Full Name is required";
    } elseif (empty($phone)) {
        $error_message = "Phone Number is required";
    } elseif (empty($name)) {
        $error_message = "User Name is required";
    } elseif (empty($gender)) {
        $error_message = "Please choose gender";
    } elseif (empty($password)) {
        $error_message = "Password is required";
    } elseif (empty($con_password)) {
        $error_message = "Confirmation Password is required";
    } elseif ($password != $con_password) {
        $error_message = "Password Is Not Matched";
    } elseif (strlen($password) < 6) {
        $error_message = "Password must be longer than 6 characters.";
    } else {
        $email_validation = "SELECT * FROM job_seeker WHERE Email='$email'";
        $data = mysqli_query($conn, $email_validation);
        $result = mysqli_fetch_array($data);
        if ($result > 0) {
            $error_message = "Email Already Exist";
        } else {
            $pass = md5($password);
            $insert = "INSERT INTO job_seeker (Full_Name, User_Name, Email, Phone_Number, User_Password, Gender, cv) VALUES ('$full_name','$name','$email','$phone','$password','$gender','$cv')";
            $q = mysqli_query($conn, $insert);

            if ($q) {
                $succession = "Successfully Registered.";
                $sql = "SELECT * from job_seeker WHERE User_Name = '$name'";
                $exe = mysqli_query($conn, $sql);
                $res = mysqli_fetch_assoc($exe);
                $_SESSION['lastInsert'] = $res['User_ID'];
                // $_SESSION['pass_retrieve'] = $res['User_Password'];
                header("location:security_reg_seeker.php");
                echo print_r([$_SESSION]);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Responsive Registration Form | CodingLab</title>
    <link rel="stylesheet" href="css/seeker_registration.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">User Registration</div>
        <div class="content">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="Full_Name" value="<?php if (isset($error_message)) {
                                                                                                        echo $full_name;
                                                                                                    } ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username" name="User_Name" value="<?php if (isset($error_message)) {
                                                                                                            echo $name;
                                                                                                        } ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="Email" value="<?php if (isset($error_message)) {
                                                                                                    echo $email;
                                                                                                } ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" name="Phone_Number" value="<?php if (isset($error_message)) {
                                                                                                            echo $phone;
                                                                                                        } ?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" placeholder="Enter your password" name="User_Password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" placeholder="Confirm your password" name="CPassword" required>
                    </div>
                </div>
                <div class="gender-details" name="Gender">
                    <label class="gender-title">Gender <span><?php if (isset($error_message)) {
                                                                    echo $gender;
                                                                } ?></span></label>
                    <input type="radio" id="dot-1" name="Gender" value="Male">
                    <input type="radio" id="dot-2" name="Gender" value="Female">
                    <input type="radio" id="dot-3" name="Gender" value="Others">

                    <div class="category" name="Gender">
                        <label for="dot-1" name="Gender">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2" name="Gender">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3" name="Gender">
                            <span class="dot three"></span>
                            <span class="gender">Others</span>
                        </label>
                    </div>
                </div>
                <div class="input-box">
                    <span class="details">Upload your CV</span>
                    <input type="file" name="CV">
                </div>
                <div class="button">
                    <input type="submit" value="Register" name="Employer_Register">
                </div>
            </form>
            <div class="error_message">
                <?php
                if (isset($error_message)) {
                    echo $error_message;
                }
                ?>
            </div>
            <div class="succession">
                <?php
                if (isset($succession)) {
                    echo $succession;
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>