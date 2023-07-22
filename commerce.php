<?php
    require("commerceNav.php");

    
    ini_set("display_errors", "on");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="styles/style.css" rel="stylesheet" /> -->
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
    <?php require "grid.php"; ?>

</body>

</html>