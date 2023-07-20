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
        <img src="assets/regImg.jpg"
            style="top: 10px; z-index: -1; width: 100%; height: 190px; object-fit: cover; background: linear-gradient(rgba(0,0,0,.5) rgba(0,0,0,.8));">
        <div class=" max-width">
            <div class="content">
                <div class="img">
                    <img src="assets/logo.png" alt="Rush Logo" style="background: var(--w);">
                </div>
                <div class="txt">
                    <h2 style="color: var(--w);">My Account</h2>
                    <p style="color: var(--w);"><a href=" #">Home</a> > registration</p>
                </div>
            </div>
        </div>
    </section>

    <section id="log" class="log">
        <div class="max-width">
            <form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
                <h2>Login</h2>
                <div class="max-width">
                    <div class="row">
                        <div class="content">
                            <label for="Username">Username: <span style="color: var(--cr);">*</span></label>
                            <input type="text" name="uname" placeholder="e.g; @jDoe">
                        </div>
                        <div class=" content">
                            <label for="Password">Password: <span style="color: var(--cr);">*</span></label>
                            <input type="password" name="pwd" placeholder="e.g; JDoe123">
                        </div>
                    </div>
                </div>
                <div class=" remind">
                    <input type="checkbox">
                    <p>Remember me</p>
                </div>
                <div class="btn">
                    <input type="submit" value="Login" name="submit">
                </div>
                <a href="#"></a>
            </form>
        </div>
    </section>

    <?php
        
    require("footer.php");

    
    ?>
    <?php

                        if(!isset($_GET['signin'])){
                            exit();
                        }else{
                            
                            $signin = $_GET['signin'];

                            if($signin == "empty"){
                                
                                echo "<p id='errlog'><i style='margin-right: 2%;'       class='fa-solid fa-circle-exclamation'></i>All fields are required!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                                exit();
                            }
                            else if($signin == "pwd"){
                                
                                echo "<p id='errlog'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>Password must not exceed 8 characters!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                                exit();
                            }
                            else if($signin == "null"){
                                
                                echo "<p id='errlog'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>Invalid Username or Password<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                                exit();
                            }else if($signin == "error"){
                                echo "<div class='errData'>
                                        <div class='errIcon'>
                                            <i class='fa-sharp fa-solid fa-circle-check'></i>
                                        </div>
                                        <div class='errText'>
                                            <p>Invalid Usernam or Password!</p>
                                        </div>
                                    </div>";
                                exit();
                            }
                        }
                    ?>

    <script>
    var success = document.getElementById('suc');
    var error = document.getElementById('err');
    var del = document.querySelectorAll('.fa-xmark');


    del.addEventListener('click', () => {
        success.classList.add('active');
    });

    del.addEventListener('click', () => {
        error.classList.add('active');
    });
    </script>

</body>

</html>