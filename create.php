<?php
$conn = mysqli_connect("localhost","root","","admit") or die("Connection Failed");

$sql = "CREATE TABLE logtable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    studentName VARCHAR(100),
    guardName VARCHAR(100),
    mobileNo VARCHAR(15),
    mail VARCHAR(100),
    yearF VARCHAR(20),
    course VARCHAR(50),
    bloodG VARCHAR(10),
    img VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Table already exists";
}
?>
