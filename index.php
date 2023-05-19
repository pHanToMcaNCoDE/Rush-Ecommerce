<?php
    require("commerceNav.php");

    
    ini_set("display_errors", "on");

?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap');


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

html {
    scroll-behavior: smooth;
    text-decoration: none;
}

.max-width {
    max-width: 1330px;
    padding: 0 50px;
    margin: auto;
}

.categ {
    height: 100vh;
    background-color: var(--ash3);
}

.categ .max-width {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

.categ .max-width .left {
    width: 25%;
}

.categ .max-width .left .container {
    background-color: var(--w);
    border: 1px solid var(--blk);
    border-top: none;
    width: 80%;
    height: 70vh;
}

.categ .max-width .left .container h2 {
    text-align: center;
    letter-spacing: 8px;
    padding-top: 10px;
}

.categ .max-width .left .container .cat {
    display: block;
    justify-content: space-between;
    align-items: center;
}



.categ .max-width .left .container .cat li {
    list-style: none;
    margin-top: 30px;
}

.categ .max-width .left .container .cat li a {
    font-size: 18px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
    text-decoration: none;
    color: var(--blk);
}

.categ .max-width .left .container .cat li a img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
}






.categ .max-width .right {
    width: 75%;
}

.categ .max-width .right .carousel .carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: var(--cr);
    border: 1px solid var(--w);
}

.categ .max-width .right .carousel .carousel-inner .carousel-item {
    position: relative;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item img {
    width: 100%;
    height: 60vh;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item .textOne {
    position: absolute;
    top: 30%;
    right: 2%;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item .textOne h2 {
    color: var(--w);
    font-size: 50px;
    font-family: var(--ub), sans-serif;
    font-weight: 500;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item .textOne p {
    color: var(--w);
    font-size: 20px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item .textOne a {
    color: var(--w);
    font-size: 18px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
}


.categ .max-width .right .carousel .carousel-inner .carousel-item .textTwo {
    position: absolute;
    top: 30%;
    left: 10%;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item .textTwo h2 {
    color: var(--blk);
    font-size: 50px;
    font-family: var(--ub), sans-serif;
    font-weight: 500;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item .textTwo a {
    color: var(--blk);
    font-size: 18px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
}


.categ .max-width .right .carousel .carousel-inner .carousel-item .textThree {
    position: absolute;
    top: 30%;
    left: 10%;
}


.categ .max-width .right .carousel .carousel-inner .carousel-item .textThree h2 {
    color: var(--blk);
    font-size: 50px;
    font-family: var(--ub), sans-serif;
    font-weight: 500;
}


.categ .max-width .right .carousel .carousel-inner .carousel-item .textThree p {
    color: var(--blk);
    font-size: 20px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
}

.categ .max-width .right .carousel .carousel-inner .carousel-item .textThree a {
    color: var(--blk);
    font-size: 18px;
    font-family: var(--av), sans-serif;
    font-weight: 300;
}

@media only screen and (min-width: 320px) and (max-width: 480px) {

    .categ .max-width .left {
        width: 0%;
        display: none;
    }

    .categ .max-width .right {
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        top: 9.5%;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item {
        position: relative;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item img {
        width: 100%;
        height: 60vh;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textOne h2 {
        font-size: 28px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textOne p {
        font-size: 18px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textOne a {
        font-size: 16px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textTwo h2 {
        font-size: 28px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textTwo a {
        font-size: 16px;
    }


    .categ .max-width .right .carousel .carousel-inner .carousel-item .textThree h2 {
        font-size: 28px;
    }


    .categ .max-width .right .carousel .carousel-inner .carousel-item .textThree p {
        font-size: 18px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textThree a {
        font-size: 16px;
    }
}



@media only screen and (min-width: 481px) and (max-width: 768px) {

    .categ .max-width .left {
        width: 0%;
        display: none;
    }

    .categ .max-width .right {
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        top: 9.5%;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item {
        position: relative;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item img {
        width: 100%;
        height: 60vh;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textOne h2 {
        font-size: 28px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textOne p {
        font-size: 18px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textOne a {
        font-size: 16px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textTwo h2 {
        font-size: 28px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textTwo a {
        font-size: 16px;
    }


    .categ .max-width .right .carousel .carousel-inner .carousel-item .textThree h2 {
        font-size: 28px;
    }


    .categ .max-width .right .carousel .carousel-inner .carousel-item .textThree p {
        font-size: 18px;
    }

    .categ .max-width .right .carousel .carousel-inner .carousel-item .textThree a {
        font-size: 16px;
    }
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>The Rush || inspired by dreams - Registration</title>
    <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section class="categ" id="categ">
        <div class="max-width">
            <div class="left">
                <div class="container">
                    <h2>CATEGORY</h2>
                    <ul class="cat">
                        <li>
                            <a href="#"><img src="assets/categIcons/electronics.png" alt="">Electronics</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/categIcons/fashion.png" alt="">Fashion</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/categIcons/groceries.png" alt="">Groceries</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/categIcons/home-life.png" alt="">LifeStyle</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/categIcons/medicine.png" alt="">Medicine</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/categIcons/pets.png" alt="">Pets</a>
                        </li>
                        <li>
                            <a href="#"><img src="assets/categIcons/sports.png" alt="">Outdoors</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/ads/adv1.jpg" class="d-block" alt="Advert1">
                            <div class="textOne">
                                <h2>Get yours at $1.99</h2>
                                <p>You can get your favourite snacks at <br>affordable prices</p>
                                <a href="#">Order now <i style="margin-left: 5px;"
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/ads/adv2.jpg" class="d-block" alt="Advert2">
                            <div class="textTwo">
                                <h2>Get high quality <br>Cosmetics!</h2>
                                <a href="#">Order now <i style="margin-left: 5px;"
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/ads/adv3.jpg" class="d-block" alt="Advert3">
                            <div class="textThree">
                                <h2>At affordable prices!</h2>
                                <p>Rush down and grab your kids favourite <br>heros at lesser prices.
                                </p>
                                <a href="#">Order now <i style="margin-left: 5px;"
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
    </section>

    <section id="sales" name="sales">
        <div class="mini">
            <i class="fa-solid fa-paperclip"></i>
            <h5>Today's deal</h5>
        </div>
        <div class="max-width">

        </div>
    </section>

</body>

</html>