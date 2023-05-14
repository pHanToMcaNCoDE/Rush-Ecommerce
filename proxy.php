<?php



require("connect.php");
require("loginData.php");



// Login

if(isset($_GET['signin']) && $_GET['signin'] == "done" && isset($_POST['submit'])){

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $log = new Login();
    

            if(empty($uname) || empty($email) || empty($pwd)){
                header("Location: Login.php?signin=empty");
                exit();
            }else{
                if(strlen($pwd) > 8){
                    header("Location: Login.php?signin=password");
                    exit();
                }else{
                    if($log->getLogin($uname, $pwd)){
                        header("Location: index.php?signin=success");
                        exit();
                    }else{
                        header("Location: Login.php?sigin=error");
                    }
                } 
            }
                
}




?>