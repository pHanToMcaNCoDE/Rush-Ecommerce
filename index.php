<?php
require "connection.php";

if ($_POST['signup']) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $connect = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

    if (!$connect) {
        die('Cannot connect to the database ' . $connect->connect_error);
    } else {
        $query = "INSERT INTO `Signup`(`UserName`,`EmailAddress`,`Password`) VALUES('" . $uname . "','" . $email . "', '" . $pwd . "')";

        if (empty($uname) && empty($email) && empty($pwd)) {
            header("Location: index.php?empty=all");
            exit();
        } else if (empty($uname) && isset($email) && isset($pwd)) {
            header("Location: index.php?empty=uname");
            exit();
        } else if (isset($uname) && empty($email) && isset($pwd)) {
            header("Location: index.php?empty=email");
            exit();
        } else if (isset($uname) && isset($email) && empty($pwd)) {
            header("Location: index.php?empty=pwd");
            exit();
        } else {
            if (strlen($uname) > 6) {
                header("Location: index.php?signup=uname");
                exit();
            } else if (strlen($pwd) > 8) {
                header("Location: index.php?signup=pwd");
                exit();
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: index.php?signup=email");
                exit();
            } else if ($connect->query($query)) {
                header("Location: signin.php?signup=success");
                exit();
            } else {
                header("Location: index.php?sigup=error");
            }
        }
    }
}
?>

<?php
ini_set('display_error', "On");
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
                <form class="register" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                        <input type="submit" name="signup" value="Signup" class="submitReg">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php
    require("footer.php");
    ?>

    <?php
    if (isset($_GET['empty']) && $_GET['empty'] == 'all') {
        echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>All fields are required!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
    } else if (isset($_GET['empty']) && $_GET['empty'] == 'uname') {
        echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Username required!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
    } else if (isset($_GET['empty']) && $_GET['empty'] == 'email') {
        echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Email Address required!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
    } else if (isset($_GET['empty']) && $_GET['empty'] == 'pwd') {
        echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Password required!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
    } else if (isset($_GET['signup']) && $_GET['signup'] == "uname") {
        echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Username should not be more that 6 characters!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
    } else if (isset($_GET['signup']) && $_GET['signup'] == "pwd") {
        echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Password should not be more that 16 characters!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
    } else if (isset($_GET['signup']) && $_GET['signup'] == "email") {
        echo "<div id='err'>
                        <div class='left'>
                            <h2>👎🏼</h2>
                        </div>
                        <div class='right'>
                            <h2>Invalid Email Address!</h2>
                            <p>Please try again</p>
                        </div>
                    </div>";
    } else {
        exit();
    }

    ?>
    <!-- <script>
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

    
    </script>-->
</body>

</html>