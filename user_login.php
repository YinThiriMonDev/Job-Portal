<?php
session_start();
include 'connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['user_name'];
    $password = $_POST['user_password'];

    $sql = $db->prepare("SELECT * FROM job_seeker WHERE User_Name = :username AND User_Password = :password");
    // to bound securely to the named parameters
    // binParam paramenter marker which is defined in the SQL statement (':')
    $sql->bindParam(':username', $username);

    $sql->bindParam(':password', $password);
    $sql->execute();

    if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        // User found, perform login logic
        $_SESSION['usr'] = $row['User_Name'];
        $_SESSION['usr_Id'] = $row['User_ID'];

        echo "<script>
              alert('User Login Successful');
              window.location.href='job_listing_UI.php';
              </script>";
        exit;
    } else {
        // User not found, show error message or redirect to an error page
        echo "<script>
              window.location.href='errorpage.php';
              </script>";
        exit;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Webleb</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/login.css" rel="stylesheet">
</head>
<body background="images/sky.jpg">
  <div class="login-box">
    <h2> User Login</h2>
    <form method="POST">
      <div class="user-box">
        <input type="text" name="user_name" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="user_password" required="">
        <label>Password</label>
      </div>
      <div><a href="pass_recover_seeker.php">forgot password?</a></div>
      <button type="submit" id="login_button" name="login" value="login">Submit</button>
    </form>
  </div>
</body>
</html>
