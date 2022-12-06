<?php
  include "db.php";
   
 

  if (isset($_POST['update'])) {
    
      $image_name = $_FILES['image']['name'];
      $temp_image_name =  $_FILES['image']['tmp_name'];
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
      $address = $_POST['address'];

      move_uploaded_file($temp_image_name,"img$image_name");
  
     
      $link= "INSERT INTO `students` (`image`, `name`, `gender`, `dob`, `email`, `phonenumber`, `address`) VALUES ('$image_name', '$name', '$gender', '$dob', '$email', '$phonenumber', '$address');";
      $query = mysqli_query($con, $link) or die("Could not insert: $link");
      echo "<script>window.location.href='students.php'</script>";
    }
    


?>


<div class="modal fade" id="addstudents" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form action="students.php" method="POST" enctype="multipart/form-data">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <label for="">Upload Image</label>
          <input type="file" name="image" accept=".jpg, .jpeg, .png, .svg" class="form-control" required>
        </div>
        <div class="form-group mt-3">
        <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Fullname" required>
        </div>
        <div class="form-group mt-3">
        <label class="form-label">Gender</label>
        <select required="" name="gender" class="form-control custom-select">
                         <option class="text-muted" value="">Select Gender</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
        </select>
        </div>
        <div class="form-group mt-3">
        <label for="">Birthday</label>
          <input type="text" name="dob" class="form-control" placeholder="Birthday" required>
        </div>
        <div class="form-group mt-3">
        <label for="">Email Address</label>
          <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>
        <div class="form-group mt-3">
        <label for="">Contact Number</label>
          <input type="text" name="phonenumber" class="form-control" placeholder="Contact Number" required>
        </div>
        <div class="form-group mt-3">
        <label for="">Address</label>
          <input type="text" name="address" class="form-control" placeholder="Address" required>
        </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
           <button name="update" type="submit" class="btn btn-dark">Save</button>
         </div>
    </div>
  </div>
</form>
</div>

<?php require_once('scripts.php'); ?>