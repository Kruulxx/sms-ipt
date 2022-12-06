
    <?php     require_once "sidebar.php"; ?>
 <?php

$query = "SELECT * FROM students";
$run = mysqli_query($link,$query);
$student_row = mysqli_num_rows($run);



?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
 <div class="container" style=" margin-top: 100px;">
        <div class="row mx-auto justify-content-center">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              
                <div class="card-body bg-info">
                <h3 class=" pt-3 d-flex text-white justify-content-center "> <b><?php echo $student_row; ?></b> </h3>
                <p class="d-flex justify-content-center text-light mt-3"> <b>Students</b> </p>
                  <div class="border-top pt-3 mt-5 ">
             <a href="students.php" class="d-flex text-white justify-content-center ">More Information</a>
              </div>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              
                <div class="card-body bg-info">
                <h3 class=" pt-3 d-flex text-white justify-content-center "> <b>20</b> </h3>
                <p class="d-flex justify-content-center text-light mt-3"> <b>Teachers</b> </p>
                  <div class="border-top pt-3 mt-5 ">
             <a href="#" class="d-flex text-white justify-content-center ">More Information</a>
              </div>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body bg-info">
                <h3 class=" pt-3 d-flex text-white justify-content-center "> <b>7</b> </h3>
                <p class="d-flex justify-content-center text-light mt-3"> <b>Schedules</b> </p>
                  <div class="border-top pt-3 mt-5 ">
             <a href="#" class="d-flex text-white justify-content-center ">More Information</a>
              </div>
                </div>
            </div>
          </div>
          <div class="col-md-4 mt-2">
            <div class="card" style="width: 18rem;">
               
                <div class="card-body bg-info">
                <h3 class="pt-2 d-flex text-white justify-content-center "> <b>0</b> </h3>
                <p class="d-flex justify-content-center text-light mt-3"> <b>Coming soon</b> </p>
                  <div class="border-top pt-3 mt-5 ">
             <a href="#" class="d-flex text-white justify-content-center ">More Information</a>
              </div>
                </div>
            </div>
          </div>
          </div>
        </div>
      </div>

 </body>
 </html>     