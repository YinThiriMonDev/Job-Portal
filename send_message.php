<?php

include 'admin/confs/Connection.php';
// $sql=$db->prepare("SELECT * FROM admin ");
// $sql->execute();


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
        <div class="title">Send Meesage to Job_Seeker </div>
        <div class="content">

        </div>
        <form action="receive_message.php" method="post">
    <div class="input-box">
        <label for="tbuser">Message:</label>
        <textarea id="tbuser" name="message"></textarea>
    </div>

    <div class="button">
        <input type="submit" value="Send Message" id="btn1">
    </div>
</form>

<script>
    const txt1 = document.getElementById('tbuser');
    const btn1 = document.getElementById('btn1');

    btn1.addEventListener('click', function() {
        btn1.form.submit();
    });
</script>


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