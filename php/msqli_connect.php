<?php
$servername='localhost:3306';
$username='root';
$password='';
$dbname = "seminaribi";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
