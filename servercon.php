<?php
$dbconnect = mysqli_connect("localhost", "pdc20user", "12345678", "pdc20");
if (mysqli_connect_errno()){
    echo "I failed to connect to mySQL: " . mysqli_connect_error();
    die();
}
?>