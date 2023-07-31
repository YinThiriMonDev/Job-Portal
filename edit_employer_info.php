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
            margin-left: 61px;
            margin-right: 600px;
        }
    </style>




<?php
include 'admin/confs/Connection.php';

if (isset($_GET['eid'])) {
    $eid = $_GET['eid'];
    $query = "SELECT * FROM employer WHERE Employer_ID='$eid'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {

        echo '<form method="POST" action="employer_edit_process.php">
    <div class="mb-3 mt-3">
        <h1 class="text-dark">Employer information Edit Form</h1>
    </div>
    <div class="mb-3 mt-3">
        <label for="itemname" class="form-label">
            <h4>Company Name </h4>
        </label>
        <input type="hidden" name="Employer_ID" value="' . htmlspecialchars($row['Employer_ID']) . '" >
        <input type="text" class="form-control" name="Company_Name" value="' . htmlspecialchars($row['Company_Name']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
        <h4>Company Email </h4>
    </label>
    <input type="text" class="form-control" name="Company_Email" value="' . htmlspecialchars($row['Company_Email']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>Company Phone </h4>
    </label>
    <input type="text" class="form-control" name="Company_Phone" value="' . htmlspecialchars($row['Company_Phone']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>Password </h4>
    </label>
    <input type="text" class="form-control" name="Password" value="' . htmlspecialchars($row['Password']) . '">
    </div>
    <div class="mb-3 mt-3">
    <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning">
</div>

    </form>';

    } else {
        echo "No record found.";
    }
}
?>
</body>
</html>