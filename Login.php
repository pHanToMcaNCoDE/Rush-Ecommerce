<?php
ini_set("display_errors", "On");

    if(isset($_POST['submit'])){

        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        
        $sql = "SELECT `UserName`, `Email_Address`, `Password` FROM `Forms` WHERE `UserName` = '$uname' AND `Password` = '$pwd'";

        if(empty($uname) || empty($email) || empty($pwd)){
                header("Location: Login.php?signin=empty");
                exit();
        }else{
                if(strlen($pwd) > 8){
                    header("Location: Login.php?signin=password");
                    exit();
                }else{
                    if($result = $connection->query($sql)){
                        $count = $result->num_rows;
                        if($count == 1){
            
                            $_SESSION['UNAME'] = $row['UserName'];
                            $_SESSION['EMAIL'] = $row['Email_Address'];
                            
                            header("Location: index.php?signin=success");
                            exit();
                        }else{
                            
                            header("Location: index.php?signin=null");
                            exit();
                        }
                    }else{
                        header("Location: Login.php?sigin=error");
                    }
                } 
        }
            
        
        
        
    }

?>
<?php

    require("navbar.php");

?>

<style>
html {

    overflow-x: hidden;
}

:root {

    --cr2: rgb(247, 128, 152);
    --g2: #d1f1bc;
}


.max-width {
    max-width: 1330px;
    padding: 0 50px;
    margin: auto;
}

#errlog {
    z-index: 999;
    position: absolute;
    top: 35%;
    left: 24%;
    transform: translate(50%, 1%);
    width: 25%;
    padding: 20px;
    align-items: center;
    background-color: var(--cr2);
    border: 1px solid var(--cr);
    border-radius: 6px;
    font-size: 18px;
    font-weight: 400;
    font-family: var(--av), sans-serif;
    color: var(--cr);
}

#errlog .fa-xmark {
    cursor: pointer;
}

#errlog.active {
    display: none;
}

/* #suc {
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 999;
    position: absolute;
    top: 34%;
    right: 18%;
    width: 25%;
    padding: 20px;
    background-color: var(--g2);
    border: 1px solid var(--g);
    border-radius: 6px;
    font-size: 18px;
    font-weight: 400;
    font-family: var(--av), sans-serif;
    color: var(--g);
}

#suc .fa-xmark {
    cursor: pointer;
}

#suc.active {
    display: none;
} */

.log {
    height: 90vh;
    background-color: var(--ash3);
}

.log .max-width {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.log .max-width .login {
    background-color: var(--w);
    width: 43%;
    height: 45vh;
    display: block;
    justify-content: space-between;
    align-items: center;
}

.log .max-width .login h2 {
    font-size: 25px;
    font-family: var(--ub), sans-serif;
    font-weight: 600;
    color: var(--blk);
    padding-bottom: 3%;
    margin-left: 9%;
    margin-top: 4%;
}

.log .max-width .login .max-width {
    display: block;
}

.log .max-width .login .max-width .row {
    display: block;
}

.log .max-width .login .max-width .row .content {
    display: block;
    /* margin-left: 3%; */
}

.log .max-width .login .max-width .row .content label {
    font-family: var(--av), sans-serif;
    font-weight: 400;
    font-size: 17px;
    margin-bottom: 3%;
}

.log .max-width .login .max-width .row .content input {
    padding: 15px 20px;
    border-radius: 8px;
    outline: none;
    border: 1px solid var(--ash1);
    width: 100%;
    margin-bottom: 3%;
    font-size: 17px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
    letter-spacing: 2px;
}

.log .max-width .login .btn input {
    padding: 15px 8%;
    background-color: var(--pk);
    color: var(--w);
    border: 1px solid var(--pk);
    margin-top: .5%;
    margin-left: 10%;
    font-size: 17px;
    border-radius: 8px;
    cursor: pointer;
}

.log .max-width .login .remind {
    display: flex;
    margin-left: 8%;
    /* justify-content: space-between; */
    align-item: center;
}


.log .max-width .login .remind p {
    font-size: 17px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
    padding-left: 2%;
}
</style>
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
                            else if($signin == "password"){
                                
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