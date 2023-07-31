<?php
include 'admin/confs/Connection.php';
session_start();

if (isset($_POST['Register2'])) {
    $eid = $_POST['Employer_ID'];
    $ans_one = $_POST['AnswerOne'];
    $ans_two = $_POST['AnswerTwo'];
    $ans_three = $_POST['AnswerThree'];

    $insert_answer_emp = "SELECT * FROM employer WHERE Employer_ID='$eid'";
    $data_emp = mysqli_query($conn, $insert_answer_emp);
    $result = mysqli_fetch_array($data_emp);
    if ($result > 0) {
        $error_message = "Fail";
    } elseif (empty($ans_one)) {
        $error_message = "Answer is required";
    } elseif (empty($ans_two)) {
        $error_message = "Answer is required";
    } elseif (empty($ans_three)) {
        $error_message = "Answer is required";
    } else {
        $id3 = $_SESSION['lastInsertEmp'];
        // $insert = "UPDATE job_seeker (AnswerOne, AnswerTwo, AnswerThree) Values('$ans_one', '$ans_two', '$ans_three') WHERE User_ID ='$id'";
        $insert = "UPDATE employer SET AnswerOne='$ans_one', AnswerTwo='$ans_two', AnswerThree='$ans_three' WHERE Employer_ID='$id3'";
        $q = mysqli_query($conn, $insert);
        if ($q) {
            $succession = "Successfully Registered.";
            header("location:home.php");
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
            <?php

            $id3 = $_SESSION['lastInsertEmp'];
            ?>
            <span class="id" id="emp_id" name="Employer_ID" ></span>
            <div class="user-details">
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
                    <input type="submit" value="Submit" name="Register2">
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