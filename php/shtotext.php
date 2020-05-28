<?php
$myfile = fopen("README.txt", "w") or die("Unable to open file!");


if (isset($_POST['text'])){
    $text = $_POST['text'];
    session_start();
    $_SESSION['text']=$text;
    fwrite($myfile,$text);
    fclose($myfile);
}


?>
