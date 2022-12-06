<?php
  include "db.php";

  if (isset($_GET['id'])) {  
    $id = $_GET['id'];  
    $query = "DELETE FROM `archive` WHERE id = '$id'";  
    $run = mysqli_query($link,$query);  
    if ($run) {  
         header('location:trash.php');  
    }else{  
         echo "Error: ".mysqli_error($link);  
    }  
}  
          
     
     
 
?>