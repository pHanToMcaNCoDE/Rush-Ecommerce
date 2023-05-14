<?php

    require("connect.php");

    // ini_set("display_errors", "On");

    $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);


    if(isset($_POST['submit'])){
        
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];


        $sql = "INSERT INTO `Forms`(`UserName`, `Email_Address`, `Password`) VALUES ('".$uname."','".$email."','".$pwd."');";
        
            
    
            if(empty($uname) || empty($email) || empty($pwd)){
                header("Location: Registration.php?signup=empty");
                // exit();
            }else{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: Registration.php?signup=email");
                    exit();
                }else{
                    if($connection->query($sql)){
                        header("Location: Login.php?signup=success");
                        // exit();
                    }else{
                        header("Location: Registration.php?signup=error");
                        exit();
                    }
                } 
            }
                    
    }


?>
<?php


    require("navbar.php");
    require("data.php");

?>

<style>
:root {

    --cr2: rgb(247, 128, 152);
    --g2: #d1f1bc;
}

#err {
    z-index: 999;
    position: absolute;
    top: 35%;
    right: 50%;
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

#err .fa-xmark {
    cursor: pointer;
}

#err.active {
    display: none;
}


#suc {
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
        <img src="assets/regImg.jpg" style="top: 10px; z-index: -1; width: 100%; height: 190px; object-fit: cover;">
        <div class=" max-width">
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

            <form class="register" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
                <h2>Register</h2>
                <div class="max-width">
                    <div class="row">
                        <div class="content">

                            <label for="Username">Username: <span style="color: var(--cr);">*</span></label>
                            <input type=" text" name="uname" placeholder="e.g; Jdoe12">
                        </div>
                        <div class="content">
                            <label for="Email Address">Email address: <span style="color: var(--cr);">*</span></label>
                            <input type="text" name="email" placeholder="e.g; jDoe@gmail.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <label for="Password">Password: <span style="color: var(--cr);">*</span></label>
                            <input type="password" name="pwd" placeholder="jD123">
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
   
                // Registration
   
                        if(!isset($_GET['signup'])){
                            exit();
                        }else{
                            $check = $_GET['signup'];

                            if($check == "empty"){
                                
                                echo "<p id='err'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>All fields are required!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                                exit();
                                
                            }
                            else if($check == "email"){
                                
                                echo "<p id='err'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>Invalid E-mail Address<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                                exit();
                                
                            }
                            else if($check == "success"){
                                
                                echo "<p id='suc' syle='position: relative;'><i style='margin-right: 2%;' class='fa-solid fa-circle-check'></i>You've registered successfully!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
                                exit();
                                
                            }else if($check == "error"){
                                echo "<p id='err'><i style='margin-right: 2%;' class='fa-solid fa-circle-exclamation'></i>Error! try again!<i style='position: absolute; right: 2%;' class='fa-solid fa-xmark'></i></p>";
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