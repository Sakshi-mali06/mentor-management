<?php

include "db.php";

$name = $_POST['mentor_name'];
$employee_id = $_POST['employee_id'];
$department = $_POST['department'];
$designation = $_POST['designation'];
$mentee = $_POST['mentee_allowed'];


$sql = "INSERT INTO mentors
(mentor_name, employee_id, department, designation, mentee_allowed)
VALUES
('$name', '$employee_id', '$department', '$designation', '$mentee')";


if (mysqli_query($conn, $sql)) {

    header("Location: index.php");

} else {

    echo "Error while adding mentor";

}

?>