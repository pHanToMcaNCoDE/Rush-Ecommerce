<?php

require("navbar.php");
require("data.php");

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
    <section id="regForm" class="regForm">
        <img src="assets/regImg.jpg" alt="Product Image" />
        <div class="max-width">
            <div class="up">
                <div class="img">
                    <img src="assets/logo.png" alt="Rush Logo">
                </div>
                <div class="txt">
                    <h2>My Account</h2>
                    <p><a href="index.php">My Account</a> > <a href="signin.php"
                            style="text-decoration: underline; color: var(--blk);">Signin</a>
                    </p>
                </div>
            </div>

            <div class="down">
                <form class="register" action="" method="post">
                    <h2>Signup</h2>
                    <div class="row">
                        <div class="content">
                            <label for="Username">Username:</label>
                            <input type=" text" name="uname" placeholder="e.g; Jdoe12">
                        </div>
                        <div class="content">
                            <label for="Email Address">Email address:</label>
                            <input type="text" name="email" placeholder="e.g; jDoe@gmail.com">
                        </div>
                        <div class="content">
                            <label for="Password">Password:</label>
                            <input type="password" name="pwd" placeholder="Create a password">
                        </div>
                    </div>
                    <div class="btn">
                        <input type="submit" name="submit" value="Register" class="submitReg">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php
    require("footer.php");
    ?>
    <script>
    var success = document.getElementById('suc');
    var error = document.getElementById('err');
    var del = document.querySelectorAll('.fa-xmark');


    del.addEventListener('click', () => {
            success.classList.add('active');
        }

    );

    del.addEventListener('click', () => {
            error.classList.add('active');
        }

    );
    </script>
</body>

</html>