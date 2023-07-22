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
                    <p><a href="signin.php">My Account</a> > Sign in</p>
                </div>
            </div>


            <div class="down">
                <form class="login" action="" method="post">
                    <h2>Signin</h2>
                    <div class="row">
                        <div class="content">
                            <label for="Username">Username:</label>
                            <input type="text" name="uname" placeholder="e.g; @jDoe">
                        </div>
                        <div class=" content">
                            <label for="Password">Password:</label>
                            <input type="password" name="pwd" placeholder="e.g; JDoe123">
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
        </div>
    </section>


    <?php

    require("footer.php");


    ?>
    <?php

    if (!isset($_GET['signin'])) {
        exit();
    } else {

        $signin = $_GET['signin'];

        if ($signin == "empty") {

            echo "<p id='errlog'><i style='margin-right: 2%;'       class='fa-solid fa-circle-exclamation'></i>All fields are required!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
            exit();
        } else if ($signin == "pwd") {

            echo "<p id='errlog'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>Password must not exceed 8 characters!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
            exit();
        } else if ($signin == "null") {

            echo "<p id='errlog'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>Invalid Username or Password<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
            exit();
        } else if ($signin == "error") {
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