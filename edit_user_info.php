<?php
include 'Connection.php';
$eid = $_GET['eid'];
$sql = $db->prepare("SELECT * FROM job_seeker WHERE User_ID='$eid'");
$sql->execute();

$row = $sql->fetch(PDO::FETCH_ASSOC);
extract($row);
$rephoto = "upload/" . $User_Image;
?>
<html>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <style>
        body {
            background: linear-gradient(135deg, #71b7e6, #9b59b6)
        }
    </style>
    <div class="container-fluid p-5 my-5 border">
        <form method="post" action="edit_process.php" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <h1 class="text-dark">Job Seeker information Edit Form</h1>
            </div>
            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4>User Name </h4>
                </label>
                <input type="hidden" name="User_ID" value="<?php echo $User_ID; ?>">
                <input type="text" class="form-control" name="User_Name" value="<?php echo $User_Name; ?>"><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4>Password</h4>
                </label>
                <input type="text" class="form-control" name="User_Password" value="<?php echo $User_Password; ?>"><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4>Confirm Password</h4>
                </label>
                <input type="text" class="form-control" name="Confirm_Password" value="<?php echo $Confirm_Password; ?>"><br>
            </div>
            <div class="gender-details">
                <input type="radio" name="Gender" id="dot-1" value="Male">
                <input type="radio" name="Gender" id="dot-2" value="Female">
                <input type="radio" name="Gender" id="dot-3" value="Other">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="Gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="Gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="Gender">Other</span>
                    </label>
                </div>
            </div>

            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4>Email</h4>
                </label>
                <input type="text" class="form-control" name="Email" value="<?php echo $Email; ?>"><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4>Phone Number</h4>
                </label>
                <input type="text" class="form-control" name="Phone_Number" value="<?php echo $Phone_Number; ?>"><br>
            </div>


            <div class="mb-3 mt-3">
                <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning">
            </div>




        </form>
    </div>
</body>

</html>