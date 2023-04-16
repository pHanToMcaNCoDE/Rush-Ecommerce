<?php
    require("navbar.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rush -- inspired by dreams || Forms</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="reg" class="reg">
        <div class="max-width">
            <div class="content">
                <div class="img">
                    <img src="assets/logo.png" alt="Rush Logo" srcset="">
                </div>
                <div class="txt">
                    <h2>My Account</h2>
                    <p><a href="#">Home</a> > registration</p>
                </div>
            </div>
        </div>
    </section>

    <section id="form" class="form">
        <div class="max-width">
            <form class="login" action="proxy.php?signin=done" method="post">
                <h2>Login</h2>
                <div class="max-width">
                    <div class="row">
                        <div class="content">
                            <label for="Username">Username: <span style="color: var(--cr);">*</span></label>
                            <input type="text" name="uname">
                        </div>
                        <div class="content">
                            <label for="Password">Password: <span style="color: var(--cr);">*</span></label>
                            <input type="password" name="pwd">
                        </div>
                    </div>
                </div>
                <div class="remind">
                    <input type="checkbox">
                    <p>Remember me</p>
                </div>
                <div class="btn">
                    <input type="submit" value="Login" name="submit">
                </div>
                <a href="#"></a>
            </form>

            <form class="register" action="proxy.php?signup=done" method="post">
                <h2>Register</h2>
                <div class="max-width">
                    <div class="row">
                        <div class="content">

                            <label for="Username">Username: <span style="color: var(--cr);">*</span></label>
                            <input type=" text" name="uname" class="uname">
                        </div>
                        <div class="content">
                            <label for="Email Address">Email address: <span style="color: var(--cr);">*</span></label>
                            <input type="text" name="email" class="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <label for="Password">Password: <span style="color: var(--cr);">*</span></label>
                            <input type="password" name="pwd" class="pwd">
                        </div>
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" name="submit" value="Register" class="submitReg">
                </div>
            </form>

        </div>
    </section>

    <?php
        
    require("footer.php");
    include("script.php");

    
    ?>
    <?php
   

                        if(!isset($_GET['signup'])){
                            exit();
                        }else{
                            $check = $_GET['signup'];

                            if($check == "empty"){
                                
                                echo "<div class='errorData'>
                                        <div class='errorIcon'>
                                            <i class='fa-solid fa-circle-xmark'></i>
                                        </div>
                                        <div class='errorText'>
                                            <p>All fields are required!</p>
                                        </div>
                                    </div>";
                                exit();
                            }
                            else if($check == "email"){
                                
                                echo "<div class='errorData'>
                                        <div class='errorIcon'>
                                            <i class='fa-solid fa-circle-xmark'></i>
                                        </div>
                                        <div class='errorText'>
                                            <p>Invalid Email Address!</p>
                                        </div>
                                    </div>";
                                exit();
                            }
                            else if($check == "empty"){
                                
                                echo "<div class='errorData'>
                                        <div class='errorIcon'>
                                            <i class='fa-solid fa-circle-xmark'></i>
                                        </div>
                                        <div class='errorText'>
                                            <p>All fields are required</p>
                                        </div>
                                    </div>";
                                exit();
                            }
                            else if($check == "success"){
                                
                                echo "<div class='successData'>
                                        <div class='successIcon'>
                                            <i class='fa-sharp fa-solid fa-circle-check'></i>
                                        </div>
                                        <div class='successText'>
                                            <p>You've registered successfully!</p>
                                        </div>
                                    </div>";
                                exit();
                            }else if($check == "error"){
                                echo "<div class='errorData'>
                                        <div class='errorIcon'>
                                            <i class='fa-sharp fa-solid fa-circle-check'></i>
                                        </div>
                                        <div class='errorText'>
                                            <p>Error! Try again!</p>
                                        </div>
                                    </div>";
                                exit();
                            }
                        }



                        // if(!isset($_GET['signin'])){
                        //     exit();
                        // }else{
                        //     $inCheck = $_GET['signin'];

                        //     if($inCheck == "empty"){
                                
                        //         echo "<div class='errData'>
                        //                 <div class='errIcon'>
                        //                     <i class='fa-solid fa-circle-xmark'></i>
                        //                 </div>
                        //                 <div class='errText'>
                        //                     <p>All fields are required!</p>
                        //                 </div>
                        //             </div>";
                        //         exit();
                        //     }
                        //     else if($inCheck == "email"){
                                
                        //         echo "<div class='errData'>
                        //                 <div class='errIcon'>
                        //                     <i class='fa-solid fa-circle-xmark'></i>
                        //                 </div>
                        //                 <div class='errText'>
                        //                     <p>Invalid Email Address!</p>
                        //                 </div>
                        //             </div>";
                        //         exit();
                        //     }
                        //     else if($inCheck == "success"){
                                
                        //         echo "<div class='succData'>
                        //                 <div class='succIcon'>
                        //                     <i class='fa-sharp fa-solid fa-circle-check'></i>
                        //                 </div>
                        //                 <div class='succText'>
                        //                     <p>You've registered successfully!</p>
                        //                 </div>
                        //             </div>";
                        //         exit();
                        //     }else if($inCheck == "error"){
                        //         echo "<div class='errData'>
                        //                 <div class='errIcon'>
                        //                     <i class='fa-sharp fa-solid fa-circle-check'></i>
                        //                 </div>
                        //                 <div class='errText'>
                        //                     <p>Invalid Usernam or Password!</p>
                        //                 </div>
                        //             </div>";
                        //         exit();
                        //     }
                        // }
                    ?>
    <script src=" js/script.js"></script>
</body>

</html>