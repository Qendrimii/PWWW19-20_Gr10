<?php
include 'UserValidate.php';
$myemail = "ermirmulaku4@gmail.com";
$myFotoId = "55555";
 $servername = "localhost:3306";
 $username = "root";
 $password = "";
 $db = "mydb";
 $conn = mysqli_connect($servername,$username,$password,$db);
 if(!$conn)
 {echo "Nuk mund te lidhet me databazen";}



if(isset($_POST['save']))
{   $user = new User('red');
    $color = $user->merreNgjyren();

    $foto = $_POST["foto"];
    $fotoID = $_POST["fotoID"];
    $emri = $_POST["emri"];
    $mbiemri = $_POST["mbiemri"];
    $email =$_POST["email"];
    if(!preg_match("/^[a-zA-Z ]*$/",$emri) || !preg_match("/^[a-zA-Z ]*$/",$mbiemri)|| !$user->validEmail($email))
    {throw new Exception("Te dhenat nuk jane ne formatin e duhur");}
   
    
  /*  $tema = $_POST["tema"];*/
  /*  $vendi = $_POST["vendi"];*/
 else{

      include 'Session.php';
    $query = "INSERT INTO shfytezuesi(Emri,Mbiemri,idFoto,Email,Foto) values
     ('$emri','$mbiemri','$fotoID','$email','../foto/$foto')";
     $query_run = mysqli_query($conn,$query);
     if($query_run)
     {echo "Te dhenat jane shtuar me sukses ".$_SESSION['page_count']." here";
      if($_SESSION['page_count']%2==1)
      echo "<body style='background-color:$color'>";
    else{
      $ngj_tjt = $user->vendoseNgjyren('blue');
      $another_color = $user->merreNgjyren($ngj_tjt);

      echo "<body style='background-color:$another_color'>";
    }}

     else{
         echo "Te dhenat nuk jane shtuar";
     }
    }


 
}
?>