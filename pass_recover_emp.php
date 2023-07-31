<?php
include 'admin/confs/Connection.php';
session_start();

if (isset($_POST['Register'])) {
    $email = $_POST['Company_Email'];
    $ans_one = $_POST['AnswerOne'];
    $ans_two = $_POST['AnswerTwo'];
    $ans_three = $_POST['AnswerThree'];

    if (empty($email)) {
        $error_message = "Email is required";
    } elseif (empty($ans_one)) {
        $error_message = "Answer is required";
    } elseif (empty($ans_two)) {
        $error_message = "Answer is required";
    } elseif (empty($ans_three)) {
        $error_message = "Answer is required";
    } else {
        $check_email = "SELECT * FROM employer WHERE Company_Email = '$email'";
        $data = mysqli_query($conn, $check_email);
        $result = mysqli_fetch_array($data);
        if ($result < 1) {
            $error_message = "Email Not Found";
        } else {
            if ($ans_one != $result['AnswerOne']) {
                $error_message = "Answer One Incorrect";
            }
            else {
                if ($ans_two != $result['AnswerTwo']) {
                    $error_message = "Answer Two Incorrect";
                }
                else {
                    if ($ans_three != $result['AnswerThree']) {
                        $error_message = "Answer Three Incorrect";
                    } else {
                        $succession = "Answers Correct";
                        $_SESSION['email_retrieve']=$email;
                        header('location:reset_emp.php');
                        // echo print_r([$succession]);
                    }
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
                    <input type="text" id="secu-que" placeholder="Enter your email (employer)" name="Company_Email" required>
                </div>
                <div class="input-box">
                    <span class="details">What's your favourite color?</span>
                    <input type="text" id="secu-que" placeholder="Enter your answer" name="AnswerOne" required>
                </div>
                <div class="input-box">
                    <span class="details">What's your favourite food?</span>
                    <input type="text" id="secu-ans" placeholder="Enter your answer" name="AnswerTwo" required>
                </div>
                <div class="input-box">
                    <span class="details">What's your favourite country?</span>
                    <input type="text" id="secu-ans" placeholder="Enter your answer" name="AnswerThree" required>
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