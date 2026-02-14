

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $showAlert = false; 
$showError = false; 
$exists=false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean($data) {
        return htmlspecialchars(trim($data));
    }


    $sName = clean($_POST['studentName']);
    $gName = clean($_POST['guardName']);
    $contact = clean($_POST['mobileNo']);
    $mailId = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $clgYear = clean($_POST['yearF']);
    $cName = clean($_POST['course']);
    $bloodGroup = clean($_POST['bloodG']);

    


    // Basic validation
    if (!$mailId) {
        die("Invalid email format");
    }

    if (!preg_match("/^[0-9]{10}$/", $contact)) {
        die("Invalid mobile number");
    }


    
    /* IMAGE VALIDATION */
    $allowedTypes = ['jpg','jpeg','png','gif'];
    $imageName = $_FILES['img']['name'];
    $tmpName = $_FILES['img']['tmp_name'];
    $ext = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

if (!in_array($ext, $allowedTypes)) {
    header("Location: index.php?error=invalid_image");
    exit();
}
    
    $newImageName = uniqid() . "." . $ext;
    move_uploaded_file($tmpName, "uploads/".$newImageName);


    $conn = mysqli_connect("localhost","root","","admit") or die ("Connection Failed");

    $sql = "INSERT INTO logtable(studentName , guardName , mobileNo , mail , yearF, course , bloodG , img) VALUES ('{$sName}', '{$gName}' , '{$contact}', '{$mailId}', '{$clgYear}', '{$cName}', '{$bloodGroup}', '{$imageName}' )";


    $result = mysqli_query($conn, $sql) or die("Query unsuccessful");


    header("location:http://localhost/Hackathon/index.php?success=1");


    mysqli_close($conn);



    exit();
}
?>



</body>
</html>



