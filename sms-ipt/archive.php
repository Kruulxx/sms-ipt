<?php   
  
  require_once "db.php"; 

  $id = $_GET['id'];


  $query= "INSERT INTO `archive` (`image`, `name`, `gender`, `dob`, `email`, `phonenumber`, `address`) SELECT  `image`, `name`, `gender`, `dob`, `email`, `phonenumber`, `address` FROM `students` WHERE `id` = '$id';";

  if(mysqli_query($link, $query)){
    $query = "DELETE FROM `students` WHERE id = '$id'";  
    if(mysqli_query($link, $query)) {  
        echo "<script>" . "window.location.href='students.php';" . "</script>";  
   }else{  
        echo "Error: ".mysqli_error($link);  
   }  
  }



?>

