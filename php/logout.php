<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 5/28/2020
 * Time: 7:46 PM
 */

    session_start();
    session_destroy();
    if (isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        setcookie('email',$email,time()-1);
        setcookie('pass',$pass,time()-1);
    }
    echo "You successfully logout .  Click here to login again <a href='login.php'>try again</a>";

?>