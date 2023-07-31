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

</html>


<?php
include 'admin/confs/Connection.php';

if (isset($_GET['eid'])) {
    $eid = $_GET['eid'];
    $query = "SELECT * FROM job WHERE Job_ID='$eid'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {

        echo '<form method="POST" action="job_edit_process.php">
    <div class="mb-3 mt-3">
        <h1 class="text-dark">Job information Edit Form</h1>
    </div>
    <div class="mb-3 mt-3">
        <label for="itemname" class="form-label">
            <h4>Job  Name </h4>
        </label>
        <input type="hidden" name="Job_ID" value="' . htmlspecialchars($row['Job_ID']) . '" >
        <input type="text" class="form-control" name="Job_Name" value="' . htmlspecialchars($row['Job_Name']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
        <h4>Salary </h4>
    </label>
    <input type="text" class="form-control" name="Salary" value="' . htmlspecialchars($row['Salary']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>Company Name </h4>
    </label>
    <input type="text" class="form-control" name="Employer_ID" value="' . htmlspecialchars($row['Employer_ID']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>Description </h4>
    </label>
    <input type="text" class="form-control" name="Description" value="' . htmlspecialchars($row['Description']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4> Requirements </h4>
    </label>
    <input type="text" class="form-control" name="Requirements" value="' . htmlspecialchars($row['Requirements']) . '">
    </div>
    <div class="mb-3 mt-3">
    <label for="itemname" class="form-label">
    <h4>Location</h4>
    </label>
    <input type="text" class="form-control" name="Location" value="' . htmlspecialchars($row['Location']) . '">
    </div>
    <div class="mb-3 mt-3">
    <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning">
</div>

    </form>';

        echo '';
    } else {
        echo "No record found.";
    }
}
?>