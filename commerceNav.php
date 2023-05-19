<?php
ini_set("display_errors", "on");

require "connect.php";
session_start();


?>

<style>
/**************************************************** 
# Commerce Navigation 
******************************************************/


* {
    margin: 0;
    padding: 0;
    text-decoration: none;
}

:root {
    /* Fonts */
    --pop: 'Poppins';
    --ub: 'Ubuntu';
    --av: 'Avenir';
    --rob: 'Roboto';

    /* Colors */
    --ash1: #888787;
    --ash2: #f1f1f1e5;
    --pk: #FF75A0;
    --w: #ffffff;
    --blk: #000000;
    --m: #e9e5e0;
    --ash3: #f9fafc;
    --cr: crimson;
    --cr2: rgb(247, 128, 152);
    --g2: #d1f1bc;
    --g2: #d1f1bc;
    --g: #66B830;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    overflow-x: hidden;
}

html {
    scroll-behavior: smooth;
    text-decoration: none;
}

.max-width {
    max-width: 1330px;
    padding: 0 50px;
    margin: 0 auto;
}

.commerceNav {
    padding: 10px 0;
    width: 100%;
    height: 70px;
    border-bottom: 1px solid var(--blk);
}

.commerceNav .max-width {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.commerceNav .max-width .logo a img {
    width: 40px;
    height: 40px;
}

.commerceNav .max-width .navig {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.commerceNav .max-width .navig .links {
    display: flex;
    justify-content: space-between;
    align-items: center;
}


.commerceNav .max-width .links li {
    list-style: none;
}


.commerceNav .max-width .navig .del i {
    display: none;
}

.commerceNav .max-width .navig .links li a {
    margin-right: 30px;
    color: var(--blk);
    font-family: var(--pop), sans-serif;
    font-weight: 300;
    font-size: 17px;
    text-decoration: none;
}

.commerceNav .max-width .navig .search {
    width: 30rem;
    border: 1px solid #000;
    display: flex;
    align-items: center;
    padding: 5px 20px;
    border-radius: 20px;
}

.commerceNav .max-width .navig .search input {
    width: 100%;
    padding: 5px 10px;
    font-size: 16px;
    font-weight: 300;
    font-family: var(--av), sans-serif;
    letter-spacing: 2px;
    word-spacing: 2px;
    outline: none;
    margin-right: 7px;
    border: none;
    background-color: transparent;
}

.commerceNav .max-width .navig .theIcons {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.commerceNav .max-width .navig .theIcons li {
    list-style: none;
    margin-left: 30px;
}

.commerceNav .max-width .menu i {
    font-size: 20px;
    display: none;
}

@media only screen and (min-width: 320px) and (max-width: 480px) {


    .commerceNav .max-width .navig {
        border-top: 1px solid var(--blk);
        display: block;
        height: 100vh;
        width: 100%;
        background-color: var(--w);
        z-index: 999;
        position: absolute;
        top: 0%;
        right: -100%;
        /* left: 0; */
    }

    .commerceNav .max-width .navig.active {
        right: 0;
    }



    .commerceNav .max-width .menu i {
        display: block;
    }

    .commerceNav .max-width .navig .del {
        position: absolute;
        top: 2%;
        right: 4%;
    }

    .commerceNav .max-width .navig .del i {
        font-size: 20px;
        display: block;
    }

    .commerceNav .max-width .navig .links {
        display: block;
        padding-left: 10px;
        padding-right: 10px;
    }

    .commerceNav .max-width .navig .links li {
        margin-top: 45px;
        text-align: center;
    }



    .commerceNav .max-width .navig .links li a {
        font-size: 18px;
    }

    .commerceNav .max-width .navig .theIcons {
        display: flex;
        padding: 5px 10px;
    }

    .commerceNav .max-width .navig .theIcons li {
        list-style: none;
    }

    .commerceNav .max-width .navig .search {
        width: 19rem;
        margin: 10px;
    }
}



@media only screen and (min-width: 481px) and (max-width: 768px) {

    .commerceNav .max-width .navig {
        border-top: 1px solid var(--blk);
        display: block;
        height: 100vh;
        width: 100%;
        background-color: var(--w);
        z-index: 999;
        position: absolute;
        top: 0%;
        right: -100%;
        /* left: 0; */
    }

    .commerceNav .max-width .navig.active {
        right: 0;
    }



    .commerceNav .max-width .menu i {
        display: block;
    }

    .commerceNav .max-width .navig .del {
        position: absolute;
        top: 2%;
        right: 4%;
    }

    .commerceNav .max-width .navig .del i {
        font-size: 20px;
        display: block;
    }

    .commerceNav .max-width .navig .links {
        display: block;
        padding-left: 10px;
        padding-right: 10px;
    }

    .commerceNav .max-width .navig .links li {
        margin-top: 45px;
        text-align: center;
    }



    .commerceNav .max-width .navig .links li a {
        font-size: 18px;
    }

    .commerceNav .max-width .navig .theIcons {
        display: flex;
        padding: 5px 10px;
    }

    .commerceNav .max-width .navig .theIcons li {
        list-style: none;
    }

    .commerceNav .max-width .navig .search {
        width: 19rem;
        margin: 10px;
    }
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rush - inspired by dreams || Welcome</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script> -->
</head>

<body>

    <nav class="commerceNav">
        <div class="max-width">
            <div class="logo">
                <a href="index.php"><img src="assets/logo.png" alt="Official Logo"></a>
            </div>
            <div class="navig">
                <div class="del">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="search">
                    <input type="text" name="search" placeholder="e.g; Console">
                    <a href="#" class="searchGo"><img src="assets/s.png" alt="Search Icon" width="30" height="30"></a>
                </div>
                <ul class="theIcons">
                    <li>
                        <a href="#">
                            <img src="assets/user.png" alt="Account Icon" width="30" height="30">
                        </a>
                    </li>
                    <li>
                        <a href="#" style="position: relative;">
                            <img src="assets/like.png" alt="Like-List Icon" width="30" height="30">
                            <div class="notif"
                                style="position: absolute; top: -30%; right: -30%; background: var(--cr); border: 1px solid var(--w); width: 22px; height: 22px; border-radius: 50%;">
                                <div class="count">
                                    <p style="color: var(--w); font-size: 14px; font-weight: 300; text-align: center;">
                                        14</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" style="position: relative;">
                            <img src="assets/cart.png" alt="Cart Icon" width="30" height="30">
                            <div class="notif"
                                style="position: absolute; top: -30%; right: -30%; background: var(--cr); border: 1px solid var(--w); width: 22px; height: 22px; border-radius: 50%;">
                                <div class="count">
                                    <p style="color: var(--w); font-size: 14px; font-weight: 300; text-align: center;">
                                        0</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>

    <script>
    var links = document.querySelector('.navig');
    var menu = document.querySelector('.fa-bars');
    var cancel = document.querySelector('.fa-xmark');

    menu.addEventListener('click', () => {
        links.classList.add('active');
        links.style.transition = "all .5s";
    });

    cancel.addEventListener('click', () => {
        links.classList.remove('active');
        links.style.transition = "all .5s";
    });
    </script>
</body>

</html>