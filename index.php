<?php
    require("commerceNav.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"/>
    <title>The Rush || inspired by dreams - Registration</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="homeIn">
    <section class="categ" id="categ">
        <div class="max-width">
            <div class="left">
            <div class="category">
                <h3>Categories</h3>
                <div class="content">
                    <div class="icon">
                        <img src="assets/categIcons/electronics.png" alt="Electronics Icon" srcset="" width="35" height="35">
                    </div>
                    <div class="txt">
                        <a href="#"><p>Electronics</p></a>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="assets/categIcons/medicine.png" alt="Medicine Icon" srcset="" width="35" height="35">
                    </div>
                    <div class="txt">
                        <a href="#"><p>Medicine</p></a>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="assets/categIcons/home-life.png" alt="Lifestyle Icon" srcset="" width="35" height="35">
                    </div>
                    <div class="txt">
                        <a href="#"><p>Home & Lifestyle</p></a>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="assets/categIcons/sports.png" alt="Sports Icon" srcset="" width="35" height="35">
                    </div>
                    <div class="txt">
                        <a href="#"><p>Sports & Outdoors</p></a>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="assets/categIcons/fashion.png" alt="Fashion Icon" srcset="" width="35" height="35">
                    </div>
                    <div class="txt">
                        <a href="#"><p>Fashion</p></a>
                    </div>
                </div>
                <div class="content">
                    <div class="icon">
                        <img src="assets/categIcons/groc.png" alt="Fashion Icon" srcset="" width="35" height="35">
                    </div>
                    <div class="txt">
                        <a href="#"><p>Groceries</p></a>
                    </div>
                </div>
            </div>
        </div>


            <!-- Carousel -->
        <div class="right">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="430" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#777"></rect>
                                    <text x="50%" y="50%" fill="#555" dy=".3em">First slide</text>
                                </svg>
                            </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="430" src="assets/ads/ads1.jpg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false" style="object-fit: cover;"/>
                                <!-- <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#666"></rect>
                                <text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text>
                            </svg> -->
                        </div>
                        <div class="carousel-item active">
                            <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="430" src="assets/ads/ads2.jpg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false" style="object-fit: cover;"/>
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#555"></rect>
                                <text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>