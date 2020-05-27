<?php

include_once 'msqli_connect.php';
if(isset($_POST['save']))
{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city_name = $_POST['city_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$image = $_POST['image'];
$sql = "INSERT INTO clients (first_name,last_name,email,city_name,phone,image)
VALUES ('$first_name','$last_name','$email','$city_name','$phone','../foto/$image')";
if (mysqli_query($conn, $sql)) {
echo 'Te dhenat u shtuan me sukses';
} else {
echo "Error i madh: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>