<?php
ini_set("display_errors", "on");

require "connect.php";
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rush - inspired by dreams || Welcome</title>
    <link rel="stylesheet" href="css/style.css">
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