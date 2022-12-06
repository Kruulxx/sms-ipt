<?php     
 require_once('sidebar.php');  

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
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"  rel="stylesheet">
    <title>Student Management System</title>
</head>
<body>
<div class="border border-dark bg-dark">
 <h1 class="text-white d-flex justify-content-center" style="font-size:25px; margin-top:25px; margin-bottom:25px;">Students Information</h1>
</div>
    <div class="container" style="margin-top:80px;">
      <table id="example" class="table table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody >
                 <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr >
                    <td><img src="img/<?php echo $row['image']; ?>" class="rounded-circle"  height="75" alt=""></td>
             
                          <td><?php echo $row['name']?></td>
                          <td><?php echo $row['gender']?></td>
                          <td><?php echo $row['dob']?></td>
                          <td><?php echo $row['email']?></td> 
                          <td><?php echo $row['phonenumber']?></td>
                          <td><?php echo $row['address']?></td>
                          
                          <td  class=" border-start border-end" style="margin-top:10px;">
                     
                         <button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-dark">View</button>
                         
          
                         <a href="archive.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Archive</a>
                          </td>
                    </tr>
            </tbody>
            <?php } ?>
           
      </table>

      
      <div class="modal fade" id="viewmodal" role="dialog">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h4 class="modal-title">Student Info</h4>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-view">
                                              </div>
                                              <div class="modal-footer">
                                              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                              </div>
                                          </div>
                                      </div>
                              </div>

                          </div>

   







<?php require_once "scripts.php"; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
		$('.table').DataTable();
  });
  </script>
<script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'view.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-view').html(response); 
                            $('#viewmodal').modal('show'); 
                        }
                    });
                });
            });
            </script>
               
</body>
</html>