<?php



require("connect.php");
require("data.php");
require("loginData.php");

// $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

// session_start();

// // Registration

if(isset($_GET['signup']) && $_GET['signup'] == "done" && isset($_POST['submit'])){
    
    $reg = new Registration();
    
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    // include_once 'connect.php';

            if(empty($uname) || empty($email) || empty($pwd)){
                header("Location: Forms.php?signup=empty");
                exit();
            }else{

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: Forms.php?signup=email");
                    exit();
                }else{
                    if($reg->getRegistration($uname, $email, $pwd)){
                        header("Location: Forms.php?signup=success");
                        exit();
                    }else{
                        header("Location: Forms.php?signup=error");
                    }
                } 
            }
                
}


// Login

if(isset($_GET['signin']) && $_GET['signin'] == "done" && isset($_POST['submit'])){

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $log = new Login();
    
    // $uname = $_POST['uname'];


    if($log->getLogin($email, $pwd)){
        header("Location: index.php");
        // exit();
    }else{
        echo "Error";
    }
    
    // include_once 'connect.php';

            // if(empty($email) || empty($pwd)){
            //     header("Location: Forms.php?signin=empty");
            //     exit();
            // }else{

            //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            //         header("Location: Forms.php?signin=email");
            //         exit();
            //     }else{
            //         if($log->getLogin($email, $pwd)){
            //             header("Location: index.php?signin=success");
            //             exit();
            //         }else{
            //             header("Location: Forms.php?signin=error");
            //             exit();
            //         }
            //     } 
            // }
                
}

// if(isset($_POST['submit'])){
    
//     include_once 'connect.php';

//     $uname = $_POST['uname'];
//     $email = $_POST['email'];
//     $pwd = $_POST['pwd'];

//     if(empty($uname) || empty($email) || empty($pwd)){
//         header("Location: Forms.php?msg=empty");
//         exit();
//     }else{
//         if(!preg_match("/^[a-zA-Z]*$/", $uname)){
//             header("Location: Forms.php?msg=string");
//         }
//     }
// }


?>