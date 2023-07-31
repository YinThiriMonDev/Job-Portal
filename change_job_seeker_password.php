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
            background-color: LightCyan;
        }
    </style>
    <div class="container-fluid p-5 my-5 border">
        <form method="post" action="edit_process.php" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <h1 class="text-dark">Job Seeker information Edit Form</h1>
            </div>

            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4> Old Password</h4>
                </label>
                <input type="text" class="form-control" name="User_Password" value="<?php echo $User_Password; ?>"><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4>New Password</h4>
                </label>
                <input type="text" class="form-control" name="New_Password" value="<?php echo $Confirm_Password; ?>"><br>
            </div>
            <div class="mb-3 mt-3">
                <label for="itemname" class="form-label">
                    <h4>Retype Password</h4>
                </label>
                <input type="text" class="form-control" name="Retype_Password" value="<?php echo $Confirm_Password; ?>"><br>
            </div>






            <div class="mb-3 mt-3">
                <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning">
            </div>




        </form>
    </div>
</body>

</html>