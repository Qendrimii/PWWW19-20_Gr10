<?php
 $vlera = true;
 $servername = "localhost:3306";
 $username = "root";
 $password = "";
 $db = "mydb";
 $vlera = true;
 $conn = mysqli_connect($servername,$username,$password,$db);
 if(!$conn)
 {echo "Nuk mund te lidhet me databazen";}
 

if(isset($_POST['submit']))
{ 
 
    $foto = $_POST("foto");
    $idPhoto = $_POST["fotoID"];
    $emri = $_POST["emri"];
    $mbiemri = $_POST["mbiemri"];
    $email = $_POST["email"];
  /*  $tema = $_POST["tema"];*/
  /*  $vendi = $_POST["vendi"];*/
    $query = "INSERT INTO shfytezuesi(Emri,Mbiemri,idFoto,Email,Foto) values
     ('$emri','$mbiemri','$idPhoto','$email','$foto')";
     $query_run = mysqli_query($conn,$query);
     if($query_run)
     {echo "Te dhenat jane shtuar me sukses";}
     else{
         echo "Te dhenat nuk jane shtuar";
     }



 
}
?>