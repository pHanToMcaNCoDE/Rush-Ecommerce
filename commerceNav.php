<?php
ini_set("display_errors", "on");

require "connect.php";
session_start();


?>

<style>
/**************************************************** 
# Commerce Navigation 
******************************************************/

.commerceNav {
    position: sticky;
    height: 70px;
    width: 100%;
    padding: 5px 0;
    background-color: none;
    border-bottom: 1px solid var(--blk);
}

.commerceNav .max-width {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.commerceNav .max-width .logo {
    display: flex;
    align-items: center;
    object-fit: cover;
}

.commerceNav .max-width .links {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.commerceNav .max-width .links li {
    list-style: none;
}

.commerceNav .max-width .links li a {
    margin-left: 20px;
    color: var(--blk);
    font-family: var(--pop), sans-serif;
    font-weight: 300;
    font-size: 17px;
    text-decoration: none;
}

.commerceNav .max-width .search {
    width: 50%;
    border: 1px solid #000;
    display: flex;
    align-items: center;
    padding: 5px 20px;
    border-radius: 20px;
}

.commerceNav .max-width .search input {
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

.commerceNav .max-width .commerceIcons .theIcons {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.commerceNav .max-width .commerceIcons .theIcons li {
    list-style: none;
    margin-left: 20px;
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
</head>

<body>
    <nav class="commerceNav">
        <div class="max-width">
            <div class="logo">
                <a href="index.php"><img src="assets/logo.png" alt="Official Logo"></a>
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
            <div class="commerceIcons">
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
        </div>
    </nav>
</body>

</html>