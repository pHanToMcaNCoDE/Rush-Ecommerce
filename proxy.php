<?php

require("connect.php");
require("data.php");

session_start();

// Registration

if(isset($_GET['register']) && $_GET['register'] == "done" && isset($_POST['submit'])){
    
    $reg = new Registration();
    
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    if($reg->getRegistration($uname, $email, $pwd)){
        $_SESSION['status'] = "You've registered successfully";
        $_SESSION['text'] = "Try and Login";
        $_SESSION['success'] = "success";
        header("Location: Forms.php");
    }else{
        $_SESSION['status'] = "Something went wrong";
        $_SESSION['text'] = "Try again";
        $_SESSION['success'] = "error";
        header("Location: Forms.php");
    }
}


?>