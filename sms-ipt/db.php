<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'sms-ipt';

# Connection
$link = mysqli_connect($servername, $username, $password, "$dbname");

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
?>