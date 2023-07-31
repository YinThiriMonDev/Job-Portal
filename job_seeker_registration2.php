<?php
session_start();
include 'admin/confs/Connection.php';
// $sql=$db->prepare("SELECT * FROM admin ");
// $sql->execute();

if (isset($_POST['Employer_Register'])) {
  $full_name = $_POST['Full_Name'];
  $name = $_POST['User_Name'];
  $email = $_POST['Email'];
  $phone = $_POST['Phone_Number'];
  $password = $_POST['User_Password'];
  $con_password = $_POST['CPassword'];
  $gender = $_POST['Gender'];

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
    // $dat = $db->prepare($email_validation);
    $data = mysqli_query($conn, $email_validation);
    // $dat->execute();
    $result = mysqli_fetch_array($data);
    if ($result > 0) {
      $error_message = "Email Already Exist";
    } else {
      $pass = md5($password);
      $insert = "INSERT INTO job_seeker (Full_Name, User_Name, Email, Phone_Number, User_Password, Gender) Values('$full_name','$name','$email','$phone','$password',  '$gender')";
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
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Responsive Registration Form | CodingLab </title>
  <link rel="stylesheet" href="css/seeker_registration.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

  <div class="container">
    <div class="title"> User Registration</div>
    <div class="content">
      <form method="POST" action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="Full_Name" value="<?php
                                                                                      if (isset($error_message)) {
                                                                                        echo $full_name;
                                                                                      } ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="User_Name" value="<?php
                                                                                          if (isset($error_message)) {
                                                                                            echo $name;
                                                                                          } ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="Email" value="<?php
                                                                                  if (isset($error_message)) {
                                                                                    echo $email;
                                                                                  } ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="Phone_Number" value="<?php
                                                                                          if (isset($error_message)) {
                                                                                            echo $phone;
                                                                                          } ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="User_Password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="CPassword" required>
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

        <div class="button">
          <input type="submit" value="Register" name="Employer_Register">
        </div>
      </form>
      <div class="error_message">
        <?php
        if (isset($error_message)) {
          // print_r($error_message);
          echo $error_message;
        }

        ?>
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
    </div>
  </div>

</body>

</html>