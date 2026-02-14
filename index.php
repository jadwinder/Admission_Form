   
<?php
if (isset($_GET['error'])) {
    echo '<div class="alert alert-danger ">
            Only JPG, JPEG, PNG, GIF allowed!
          </div>';
}

  
 if (isset($_GET['success'])) {
    echo '<div class="alert alert-success alert-dismissible fade show">
            <strong>Success!</strong> Form registered successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>';
}
  
    
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>



<body>

<form method="POST" action="/Hackathon/submit.php" enctype="multipart/form-data">

    <div class="mt-3 mb-4">
        <h2 class="text-center fs-3 ">Student Admission Form</h2>
    </div>

    
    <div class="container">
        <div class="row g-3">
            <div class="col-12 col-md-6" >
                <label class="form-label">Student Name</label>
<input type="text" class="form-control" name="studentName"
       required pattern="[A-Za-z ]{3,50}"
       placeholder="Enter student name">            
                <label  class="form-label">Guardian's Name</label>
<input type="text" class="form-control" name="guardName"
       required pattern="[A-Za-z ]{3,50}"
       placeholder="Enter guardian name">                
                <label class="form-label">Contact</label>
<input type="tel" class="form-control" name="mobileNo"
       required pattern="[0-9]{10}"
       maxlength="10"
       placeholder="10 digit mobile number">            
            <label class="form-label">Email</label>
<input type="email" class="form-control" name="mail"
       required placeholder="example@email.com">            
            
        </div>

        <div class="col-12 col-md-6">
            <label class="form-label">Year</label>
<input type="number" class="form-control" name="yearF"
       required     >
            <label class="form-label">Program</label>
<input type="text" class="form-control" name="course"
       required minlength="2" maxlength="50">            
            <label class="form-label">Blood Group</label>
<input type="text" class="form-control" name="bloodG"
       required pattern="(A|B|AB|O)[+-]">            
            <label class="form-label">Profile Image</label>

<input type="file" class="form-control"
       name="img" accept="image/*" required>            
        </div>
    </div>
    
    <div class="btn d-flex mt-4 justify-content-center">
        <button class="p-2 rounded-3 text-bg-info border-0">Submit</button>
    </div>
</div>

</form>

<script>
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">

document.querySelector("form").addEventListener("submit", function(e) {
    let mobile = document.querySelector("[name='mobileNo']").value;

    if (mobile.length !== 10) {
        alert("Mobile number must be exactly 10 digits!");
        e.preventDefault();
    }
});


</script>
</body>
</html>