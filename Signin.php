<?php


require "connection.php";

if($_POST['signin']){
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if(!$connect){
        die ("Cannot connect to the database ".$connect->connect_error);
    }else{
        $query = "SELECT `UserName`, `Password` FROM `Signup` WHERE `UserName` = '$uname' AND `Password` = '$pwd'";
        
        $run = $connect->query($query);

        if (empty($uname) && empty($pwd)) {
            header("Location: Signin.php?signin=all");
            exit();
        } else if (empty($uname) && isset($pwd)) {
            header("Location: Signin.php?signin=uname");
            exit();
        } else if (isset($uname) && empty($pwd)) {
            header("Location: Signin.php?signin=pwd");
            exit();
        } else if (strlen($uname) > 6) {
            header("Location: Signin.php?uname=len");
            exit();
        } else if (strlen($pwd) > 8) {
            header("Location: Signin.php?pwd=len");
            exit();
        } else if ($run->num_rows == 1) {
            header("Location: commerce.php?sigin=success");
        } else if (!($run->num_rows >= 1)) {
            header("Location: Signin.php?signin=null");
        }else{
            
        }
    }
    
}

?>
<?php
    require("navbar.php"); 
    // echo (ini_set('display_error', "On"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rush -- inspired by dreams || Forms</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="logForm" class="logForm">
        <img src="assets/regImg.jpg">
        <div class="max-width">
            <div class="up">
                <div class="img">
                    <img src="assets/logo.png" alt="Rush Logo">
                </div>
                <div class="txt">
                    <h2>My Account</h2>
                    <p><a href="signin.php">My Account</a>
                        < <a href="index.php" style="text-decoration: underline; color: var(--blk);">Signup</a>
                    </p>
                </div>
            </div>


            <div class="down">
                <form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h2>Signin</h2>
                    <div class="row">
                        <div class="content">
                            <label for="Username">Username:</label>
                            <input type="text" name="uname" placeholder="Your username here">
                        </div>
                        <div class=" content">
                            <label for="Password">Password:</label>
                            <input type="password" name="pwd" placeholder="Your password here">
                        </div>
                        <div class="remind">
                            <input type="checkbox" name="remember">
                            <p>Remember me</p>
                        </div>
                        <div class="btn">
                            <input type="submit" value="Signin" name="signin">
                        </div>
                        <a href="#"></a>
                </form>
            </div>
        </div>
    </section>


    <?php

    require("footer.php");


    ?>
    <?php

    if (isset($_GET['signup']) && $_GET['signup'] === "success") {
        echo "<div id='suc'>
                <div class='left'>
                    <h2>👍🏼</h2>
                </div>
                <div class='right'>
                    <h2>Signup was successful!</h2>
                    <p>Please sign into your account</p>
                </div>
            </div>";
    }else{
        if (isset($_GET['signin']) && $_GET['signin'] == "all") {

                echo "<div id='err'>
                    <div class='left'>
                        <h2>👎🏼</h2>
                    </div>
                    <div class='right'>
                        <h2>All fields are required!</h2>
                        <p>Please try again</p>
                    </div>
                </div>";
                exit();
            } else if (isset($_GET['signin']) && $_GET['signin'] == "uname") {
                echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Username required!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
                exit();
            } else if (isset($_GET['signin']) && $_GET['signin'] == "pwd") {
                echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Password required!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
                exit();
            } else if (isset($_GET['uname']) && $_GET['uname'] == "len") {
                echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Username should not be more than 6 characters! </h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
                exit();
            } else if (isset($_GET['pwd']) && $_GET['pwd'] == "len") {
                echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Password should not be more than 8 characters!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
                exit();
            } else if (isset($_GET['signin']) && $_GET['signin'] == "null") {
                echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Not Signed up or Invalid Username and Password!</h2>
                            <p>Please try again or Signup first</p>
                        </div>
                    </div>";
                exit();
            }
    }
    ?>

    <!-- <script>
    var success = document.getElementById('suc');
    var error = document.getElementById('err');
    var del = document.querySelectorAll('.fa-xmark');


    del.addEventListener('click', () => {
        success.classList.add('active');
    });

    del.addEventListener('click', () => {
        error.classList.add('active');
    });
    </script> -->

</body>

</html>