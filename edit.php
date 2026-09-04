<?php

include "db.php";


$id = $_GET['id'];


// When Update button is clicked

if (isset($_POST['update'])) {

    $name = $_POST['mentor_name'];
    $employee_id = $_POST['employee_id'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $mentee = $_POST['mentee_allowed'];


    $sql = "UPDATE mentors SET

            mentor_name='$name',
            employee_id='$employee_id',
            department='$department',
            designation='$designation',
            mentee_allowed='$mentee'

            WHERE id=$id";


    if (mysqli_query($conn, $sql)) {

        header("Location: index.php");

    }

}


// Get existing mentor information

$result = mysqli_query($conn, "SELECT * FROM mentors WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>

<head>

    <title>Edit Mentor</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


<div class="topbar">

    <h2>Edit Mentor</h2>

</div>


<div class="container">

    <h3>Edit Mentor Information</h3>


    <form method="POST">


        <label>Mentor Name</label>

        <input type="text"
               name="mentor_name"
               value="<?php echo $row['mentor_name']; ?>">


        <label>Employee ID</label>

        <input type="text"
               name="employee_id"
               value="<?php echo $row['employee_id']; ?>">


        <label>Department</label>

        <select name="department">

            <option><?php echo $row['department']; ?></option>

            <option>Computer</option>
            <option>IT</option>
            <option>Mechanical</option>
            <option>Civil</option>

        </select>


        <label>Designation</label>

        <input type="text"
               name="designation"
               value="<?php echo $row['designation']; ?>">


        <label>Maximum Mentee Allowed</label>

        <input type="number"
               name="mentee_allowed"
               value="<?php echo $row['mentee_allowed']; ?>">


        <button type="submit" name="update">
            Update
        </button>


    </form>

</div>


</body>
</html>