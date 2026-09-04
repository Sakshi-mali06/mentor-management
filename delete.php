<?php

include "db.php";


$id = $_GET['id'];


$sql = "DELETE FROM mentors WHERE id=$id";


if (mysqli_query($conn, $sql)) {

    header("Location: index.php");

} else {

    echo "Error while deleting mentor";

}

?>