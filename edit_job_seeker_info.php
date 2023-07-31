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
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
            margin-left: 61px;
            margin-right: 600px;
        }
    </style>

</html>


<?php
include 'admin/confs/Connection.php';

if (isset($_GET['eid'])) {
    $eid = $_GET['eid'];
    $query = "SELECT * FROM job_seeker WHERE User_ID='$eid'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {

        echo '<form method="POST" action="job_seeker_edit_process.php">
    <div class="mb-3 mt-3">
        <h1 class="text-dark">Job Seeker information Edit Form</h1>
    </div>
    <div class="mb-3 mt-3">
        <label for="itemname" class="form-label">
            <h4>Job Seeker Name </h4>
        </label>
        <input type="hidden" name="User_ID" value="' . htmlspecialchars($row['User_ID']) . '" >
        <input type="text" class="form-control" name="Full_Name" value="' . htmlspecialchars($row['Full_Name']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
        <h4>User Name </h4>
    </label>
    <input type="text" class="form-control" name="User_Name" value="' . htmlspecialchars($row['User_Name']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>User Password </h4>
    </label>
    <input type="text" class="form-control" name="User_Password" value="' . htmlspecialchars($row['User_Password']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>Gender </h4>
    </label>
    <input type="text" class="form-control" name="Gender" value="' . htmlspecialchars($row['Gender']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4> Email </h4>
    </label>
    <input type="text" class="form-control" name="Email" value="' . htmlspecialchars($row['Email']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>Phone Number </h4>
    </label>
    <input type="text" class="form-control" name="Phone_Number" value="' . htmlspecialchars($row['Phone_Number']) . '">
    </div>
    <div class="mb-3 mt-3">
    <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning">
</div>

    </form>';
    } else {
    }
}
?>