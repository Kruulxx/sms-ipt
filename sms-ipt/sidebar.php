<?php     
 
 include "db.php";

 $con=mysqli_connect('localhost','root','','sms-ipt');
 $result=mysqli_query($con,"select * from students");
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand " style="margin-left:20px; font-size:26px;" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
          
 
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Students
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addstudents" href="#">Add Students</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-students" href="#">Edit Students</a></li>
            <li><a class="dropdown-item" href="trash.php">Archive Students</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="students.php">View all Students</a></li>
          </ul>
      
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Schedules</a>

        </li>
        
      <li class="nav-item dropdown" style="margin-left:250px;">
       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Change Password</a></li>
         
            <li><hr class="dropdown-divider"></li>
            <li><a href="./logout.php" class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>

</ul>

</div>
        
      </ul>
    </div>
  </div>
</nav>
<?php     require_once "edit.php"; ?>
<?php     require_once "addstudents.php"; ?>
<?php     require_once "scripts.php"; ?>

</body>
</html>