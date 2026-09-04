<?php

include "db.php";

$result = mysqli_query($conn, "SELECT * FROM mentors");

?>

<!DOCTYPE html>
<html>
<head>

    <title>Mentor Management</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="topbar">
    <h2>Mentor Management</h2>
</div>


<!-- Add Mentor Form -->

<div class="container">

    <h3>Add Mentor</h3>

    <form action="add.php" method="POST" onsubmit="return checkForm()">

        <label>Mentor Name</label>
        <input type="text" name="mentor_name" id="mentorName">

        <label>Employee ID</label>
        <input type="text" name="employee_id" id="employeeId">

        <label>Department</label>
        <select name="department" id="department">

            <option value="">Select Department</option>
            <option>Computer</option>
            <option>IT</option>
            <option>Mechanical</option>
            <option>Civil</option>

        </select>

        <label>Designation</label>
        <input type="text" name="designation" id="designation">

        <label>Maximum Mentee Allowed</label>
        <input type="number" name="mentee_allowed" id="mentee">

        <label>Profile Photo</label>
        <input type="file" id="photo">

        <button type="submit">Submit</button>

    </form>

</div>


<!-- Mentor List -->

<div class="container">

    <h3>Mentor List</h3>

    <table>

        <tr>

            <th>Mentor Name</th>
            <th>Employee ID</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Maximum Mentee</th>
            <th>Action</th>

        </tr>


        <?php

        while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row['mentor_name']; ?></td>

            <td><?php echo $row['employee_id']; ?></td>

            <td><?php echo $row['department']; ?></td>

            <td><?php echo $row['designation']; ?></td>

            <td><?php echo $row['mentee_allowed']; ?></td>

            <td>

                <a href="edit.php?id=<?php echo $row['id']; ?>">
                    <button type="button">Edit</button>
                </a>

                <a href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this mentor?');">

                    <button type="button">Delete</button>

                </a>

            </td>

        </tr>

        <?php

        }

        ?>

    </table>

</div>


<script src="script.js"></script>

</body>
</html>