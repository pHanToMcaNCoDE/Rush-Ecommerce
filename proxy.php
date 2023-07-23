<?php



require("connection.php");



// Login

if(isset($_GET['signup']) && $_GET['signup'] == "yes"){

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $signup = new Signup();
    

            if(empty($uname)) {
                header("Location: index.php?uname");
                exit();
            }if(empty($email)) {
                header("Location: index.php?email");
                exit();
            }if(empty($pwd)){
                header("Location: index.php?pwd");
                exit();
            }else{
                if(strlen($uname) > 6){
                    header("Location: Login.php?signup=uname");
                    exit();
                } else if (strlen($pwd) > 8) {
                    header("Location: Login.php?signup=pwd");
                    exit();
                }else{
                    if($log->getLogin($uname, $email, $pwd)){
                        header("Location: sigin.php.php?signup=success");
                        exit();
                    }else{
                        header("Location: index.php?sigup=error");
                    }
                } 
            }
                
}




?>