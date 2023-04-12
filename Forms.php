<?php
    require("navbar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rush || inspired by dreams - registration</title>
    <link rel="stylesheet" href="styles/style.css">
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
            <form class="login" action="" method=" post">
                <h2>Login</h2>
                <div class="max-width">
                    <div class="row">
                        <div class="content">
                            <label for="Username">Username:</label>
                            <input type="text" name="uname">
                        </div>
                        <div class="content">
                            <label for="Password">Password:</label>
                            <input type="password" name="pwd">
                        </div>
                    </div>
                </div>
                <div class="remind">
                    <input type="checkbox">
                    <p>Remember me</p>
                </div>
                <div class=" btn">
                    <input type="submit" value="Login">
                </div>
                <a href="#"></a>
            </form>
            <form class=" register" action="proxy.php?register=done" method="post">
                <h2>Register</h2>
                <div class="max-width">
                    <div class="row">
                        <div class="content">
                            <label for="Username">Username: <span style="color: var(--cr);">*</span></label>
                            <input type=" text" name="uname">
                        </div>
                        <div class="content">
                            <label for="Email Address">Email address: <span style="color: var(--cr);">*</span></label>
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <label for="Password">Password: <span style="color: var(--cr);">*</span></label>
                            <input type="password" name="pwd">
                        </div>
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" name="submit" value="Register">
                </div>
            </form>
        </div>
    </section>

    <?php
        require("footer.php");
        include("script.php");

    ?>
</body>

</html>