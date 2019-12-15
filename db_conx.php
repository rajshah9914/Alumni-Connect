<?php
$db_conx = mysqli_connect("localhost", "root", "", "alumniconnect");
// Check for error
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
?>