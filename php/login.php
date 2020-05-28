<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 5/28/2020
 * Time: 7:35 PM
 **/
if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
    echo "<script>
        document.getElementById('email').value = '$email';
        document.getElementById('pass').value = '$pass';
        </script>";
}

?>
<style type="text/css">

    th{
        text-align: center;
    }
    h3{
        text-align: center;
    }
</style>
<table cellpadding="5" cellspacing="10" align="center">
    <h3>Login </h3>
    <form method="post" action="validate.php">
    <tr><th>Email</th><input type="text" id="email" name="email"></tr>
    <tr><th>Password</th><input type="password" id="pass" name="password"></tr>
    <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember me </td></tr>
    <tr><td colspan="2" align="right"><input type="submit" value="Login" name="login"></td></tr>
    </form>
    <a href="../Seminari.html">Home</a>
</table>
