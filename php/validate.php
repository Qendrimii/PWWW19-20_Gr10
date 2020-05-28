<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lenovo
 * Date: 5/28/2020
 * Time: 7:36 PM
 */

    $myemail = "qdemiraj@gmail.com";
    $mypass = "12345678";

    if (isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if ($email == $myemail and $pass == $mypass){
            if (isset($_POST['remember'])){
                setcookie('email',$email,time()+60*60*7);
                setcookie('pass',$pass,time()+60*60*7);

            }
                session_start();
                $_SESSION['email']=$email;
                header("location: welcome.php");

        }else{
            echo "Email or Password is Invalid.<br> Click here to <a href='login.php'>try again</a></a>";

        }
    }else{
        header("location: login.php");
    }

?>