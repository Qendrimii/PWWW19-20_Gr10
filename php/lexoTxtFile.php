<?php
$myfile = fopen("README.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("README.txt"));
echo "<a href ='shtotext.php'>Shto tekst te ri</a>";
fclose($myfile);

if (isset($_COOKIE['text'])){
    $text = $_COOKIE['text'];
    echo "<script>
        document.getElementById('text').value = '$text';
        </script>";
}

?>
<form method="post" action="shtotext.php">
    <tr><th>Teksti</th><input type="text" name="text"></tr>
    <tr><td colspan="2" align="right"><input type="submit" value="Shto tekst" name="text"></td></tr>
</form>
