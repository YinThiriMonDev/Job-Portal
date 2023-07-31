<?php
include 'admin/confs/Connection.php';

if (isset($_POST['Register'])) {
    $name = $_POST['Job_Name'];
    $salary = $_POST['Salary'];
    $company_id = $_POST['Company_Name'];
    $description = $_POST['Description'];
    $requirements = $_POST['Requirements'];
    $location = $_POST['Location'];

    if (empty($name)) {
        $error_message = "Name is required";
    } elseif (empty($salary)) {
        $error_message = "Salary is required";
    } elseif (empty($company_id)) {
        $error_message = "Company ID is required";
    } else {
        // Prepare the INSERT statement
        $insert = "INSERT INTO job (Job_Name, Salary, Employer_ID, Description, Requirements, Location) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert);

        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $salary, $company_id, $description, $requirements, $location);

        // Execute the statement
        $q = mysqli_stmt_execute($stmt);

        if ($q) {
            echo "<script>
                alert('Register Successful');
                window.location.href='job_registration.php';
            </script>";
            $succession = "Successfully Registered.";
        } else {
            $fail = "Registration failed.";
            echo "<script>
                alert('Register Fail');
                window.location.href='job_registration.php';
            </script>";
        }
    }
}
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
        <div class="title">Job Registration</div>
        <div class="content"></div>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Job Name</span>
                    <input type="text" id="Job_Name" placeholder="Enter job name" name="Job_Name" value="<?php
                                                                                                            if (isset($error_message)) {
                                                                                                                echo $name;
                                                                                                            } ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Salary</span>
                    <input type="text" id="Salary" placeholder="Enter salary" name="Salary" value="<?php
                                                                                                    if (isset($error_message)) {
                                                                                                        echo $salary;
                                                                                                    } ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Company</span>
                    <select name="Company_Name" class="btn" onchange="handleRegistration(this.value)">
                        <option value="">Select Company</option>
                        <?php
                        $query ="SELECT Employer_ID, Company_Name FROM jpp.employer";
                        $result = mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $companyId = $row['Employer_ID'];
                            $companyName = $row['Company_Name'];
                            echo "<option value='$companyId'>$companyName</option>";
                        }
                         ?>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Description</span>
                    <textarea rows="5" cols="60" name="Description" required></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Requirements</span>
                    <textarea rows="5" cols="60" name="Requirements" required></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Location</span>
                    <select name="Location" class="btn" onchange="handleRegistration(this.value)">
                        <option value="">Location</option>
                        <option value="Yangon">Yangon</option>
                        <option value="Mandalay">Mandalay</option>
                        <option value="NayPyiTaw">NayPyiTaw</option>
                        <option value="Mawlamyine">Mawlamyine</option>
                        <option value="Taunggyi">Taunggyi</option>
                        <option value="Bago">Bago</option>
                        <option value="Monywa">Monywa</option>
                        <option value="Pathein">Pathein</option>
                        <option value="Sittwe">Sittwe</option>
                        <option value="Pyay">Pyay</option>
                        <option value="Pakokku">Pakokku</option>
                        <option value="Myeik">Myeik</option>
                        <option value="Meiktila">Meiktila</option>
                        <option value="Taungoo">Taungoo</option>
                        <option value="Myingyan">Myingyan</option>
                        <option value="Mogok">Mogok</option>
                        <option value="Magway">Magway</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="button">
                    <input type="submit" value="Register" name="Register">
                </div>
            </div>
        </form>
        <div class="error_message">
            <?php
            if (isset($error_message)) {
                echo $error_message;
            }
            ?>
        </div>
        <div class="succession">
            <?php
            if (isset($succession)) {
                echo $succession;
            }
            if (isset($fail)) {
                echo $fail;
            }
            ?>
        </div>
    </div>
</body>

</html>
