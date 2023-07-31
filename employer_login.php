<?php
session_start();
include 'connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['employer_name'];
    $password = $_POST['employer_password'];

    $sql = $db->prepare("SELECT * FROM employer WHERE Company_Name = :username AND Password = :password");
    // to bound securely to the named parameters
    // binParam paramenter marker which is defined in the SQL statement (':')
    $sql->bindParam(':username', $username);

    $sql->bindParam(':password', $password);
    $sql->execute();

    if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        // User found, perform login logic
        $_SESSION['employer_session'] = $row['Employer_ID'];
        echo "<script>
              alert('User Login Successful')
              window.location.href='receive_job.php';
              </script>";
        exit;
    } else {
        // User not found, show error message or redirect to an error page
        echo "<script>
              window.location.href='employer_login.php';
              </script>";
        exit;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Employer Login Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/login.css" rel="stylesheet">
</head>
<body background="images/sky.jpg">
  <div class="login-box">
    <h2> Employer Login</h2>
    <form method="POST">
      <div class="user-box">
        <input type="text" name="employer_name" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="employer_password" required="">
        <label>Password</label>
      </div>
      <div><a href="pass_recover_emp.php">forgot password?</a></div>
      <button type="submit" id="login_button" name="login" value="login">Submit</button>
    </form>
  </div>
</body>
</html>
