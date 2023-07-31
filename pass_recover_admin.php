<?php
include 'admin/confs/Connection.php';
session_start();

if (isset($_POST['Register'])) {
    $name = $_POST['Admin_Name'];
    $ans_one = $_POST['AnswerOne'];

    if (empty($name)) {
        $error_message = "Name is required";
    } elseif (empty($ans_one)) {
        $error_message = "Answer is required";
    } else {
        $check_name = "SELECT * FROM admin WHERE Admin_Name = '$name'";
        $data = mysqli_query($conn, $check_name);
        $result = mysqli_fetch_array($data);
        if ($result < 1) {
            $error_message = "Name Not Found";
        } else {
            if ($ans_one != $result['AnswerOne']) {
                $error_message = "Answer One Incorrect";
            }
                 else {
                        $succession = "Answers Correct";
                        $_SESSION['name_retrieve']=$name;
                        header('location:reset_admin.php');

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
    <link rel="stylesheet" href="css/seeker_registration.css?v=1">
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
                    <span class="details">Enter your Name</span>
                    <input type="text" id="secu-que" placeholder="Enter admin name" name="Admin_Name" required>
                </div>
                <div class="input-box">
                    <span class="details">What's the last food you eat?</span>
                    <input type="text" id="secu-que" placeholder="Enter your answer" name="AnswerOne" required>
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