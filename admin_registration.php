<?php
session_start();
include 'admin/confs/Connection.php';

if (isset($_POST['Register'])) {
    $name = $_POST['admin_name'];
    $password = $_POST['admin_password'];
    $food = $_POST['food'];


    if (empty($name)) {
        $error_message = "Name is required";
    } elseif (empty($password)) {
        $error_message = "Password is required";
    } elseif (empty($food)) {
        $error_message = "security question is required";
    } else {
        // Prepare the INSERT statement
        $insert = "INSERT INTO admin (Admin_Name, Admin_Password, AnswerOne) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert);

        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "sss", $name, $password, $food);

        // Execute the statement
        $q = mysqli_stmt_execute($stmt);

        if ($q) {
            echo "<script>
                alert('Register Successful');
                window.location.href='admin_information.php';
            </script>";
            $succession = "Admin Successfully Registered.";
            $succ = "SELECT * from admin WHERE Admin_Name ='$name'";
            $act = mysqli_query($conn, $succ);
            $do = mysqli_fetch_assoc($act);
            $_SESSION['lastInsertAdmin'] = $do['Admin_ID'];
            // header("location:security_reg_admin");
        } else {
            $fail = "Registration failed.";
            echo "<script>
                alert('Register Fail');
                window.location.href='admin_registration.php';
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <title>Employer Registration</title>
</head>

<body>
    <div class="container">
        <div class="title"> New Admin Registration</div>
        <div class="content"></div>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Admin Name</span>
                    <input type="text" id="Job_Name" placeholder="Enter admin  name" name="admin_name" value="<?php
                                                                                                            if (isset($error_message)) {
                                                                                                                echo $name;
                                                                                                            } ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Admin Password</span>
                    <input type="text" id="Salary" placeholder="Enter password" name="admin_password" value="<?php
                                                                                                    if (isset($error_message)) {
                                                                                                        echo $password;
                                                                                                    } ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">What's the last food you eat?</span>
                    <input type="text" id="" placeholder="Enter..." name="food" value="<?php
                                                                                                    if (isset($error_message)) {
                                                                                                        echo $food;
                                                                                                    } ?>" required>
                </div>

                <div class="button">
                    <input type="submit" value="Register" name="Register">
                </div>
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
            if (isset($fail)) {
                echo $fail;
            }
            ?>
        </div>
    </div>
</body>

</html>
