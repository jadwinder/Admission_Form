<?php
$conn = mysqli_connect("localhost","root","") or die("Connection Failed");

$sql = "CREATE DATABASE IF NOT EXISTS admit";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Database already exists";
}
?>
