<?php   
   
  require_once "db.php"; 

  $id = $_GET['id'];


  $query= "INSERT INTO `students` (`image`, `name`, `gender`, `dob`, `email`, `phonenumber`, `address`) SELECT  `image`, `name`, `gender`, `dob`, `email`, `phonenumber`, `address` FROM `archive` WHERE `id` = '$id';";

  if(mysqli_query($link, $query)){
    $query = "DELETE FROM `archive` WHERE id = '$id'";  
    if(mysqli_query($link, $query)) {  
        echo "<script>" . "window.location.href='trash.php';" . "</script>";  
   }else{  
        echo "Error: ".mysqli_error($link);  
   }  
  }



?>
