<?php
 $servername = "localhost:3306";
 $username = "root";
 $password = "";
 $db = "mydb";
 $conn = mysqli_connect($servername,$username,$password,$db);
 if(!$conn)
 {echo "Nuk mund te lidhet me databazen";}


if(isset($_POST['save']))
{

    $foto = $_POST["foto"];
    $fotoID = $_POST["fotoID"];
    $emri = $_POST["emri"];
    $mbiemri = $_POST["mbiemri"];
    $email = $_POST["email"];
  /*  $tema = $_POST["tema"];*/
  /*  $vendi = $_POST["vendi"];*/
    $query = "INSERT INTO shfytezuesi(Emri,Mbiemri,idFoto,Email,Foto) values
     ('$emri','$mbiemri','$fotoID','$email','../foto/$foto')";
     $query_run = mysqli_query($conn,$query);
     if($query_run)
     {echo "Te dhenat jane shtuar me sukses";}
     else{
         echo "Te dhenat nuk jane shtuar";
     }



 
}
?>