<?php
    include 'connection.php';

    if (isset($_POST['login'])) {
        $username = $_POST['adminname'];
        $pwd = $_POST['adminpassword'];

        $sql = $db->prepare("SELECT * FROM admin WHERE Admin_Name = :username AND Admin_Password = :password");
        $sql->bindParam(':username', $username);
        $sql->bindParam(':password', $pwd);
        $sql->execute();

        $count = $sql->rowCount();

        if ($count > 0) {
            echo "<script>
                    alert('Admin Login Successful');
                    window.location.href='admin_information.php';
                </script>";
        } else {
            echo "<script>
                    window.location.href='errorpage.php';
                </script>";
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/login.css" rel="stylesheet">
</head>
<body background="images/sky.jpg">
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST">
            <div class="user-box">
                <input type="text" name="adminname" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="adminpassword" required="">
                <label>Password</label>
            </div>
            <div><a href="pass_recover_admin.php">forgot password?</a></div>
            <div class="login_button">
                <button type="submit" id="login_button" name="login" value="login">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
