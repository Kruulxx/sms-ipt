<?php
include "db.php";

$userid = $_POST['userid'];
 
$sql = "select * from students where id=".$userid;
$result = mysqli_query($link,$sql);
while( $row = mysqli_fetch_array($result) ){
?>
<table border='0' width='100%'>
<tr>
<td  width="300"><img class= "img-fluid"  src="img/<?php echo $row['image']; ?>">
    <td style="padding:20px;">
    <p>Name : <?php echo $row['name']; ?></p>
    <p>Gender : <?php echo $row['gender']; ?></p>
    <p>Birthday : <?php echo $row['dob']; ?></p>
    <p>Email Address: <?php echo $row['email']; ?></p>
    <p>Contact Number : <?php echo $row['phonenumber']; ?></p>
    <p>Address : <?php echo $row['address']; ?></p>
    </td>
</tr>
</table>
 
<?php } ?>




