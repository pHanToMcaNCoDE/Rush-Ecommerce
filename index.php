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

    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
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
                            <img src="assets/categIcons/electronics.png" alt="Electronics Icon" srcset="" width="35"
                                height="35">
                        </div>
                        <div class="txt">
                            <a href="#">
                                <p>Electronics</p>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="icon">
                            <img src="assets/categIcons/medicine.png" alt="Medicine Icon" srcset="" width="35"
                                height="35">
                        </div>
                        <div class="txt">
                            <a href="#">
                                <p>Medicine</p>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="icon">
                            <img src="assets/categIcons/home-life.png" alt="Lifestyle Icon" srcset="" width="35"
                                height="35">
                        </div>
                        <div class="txt">
                            <a href="#">
                                <p>Home & Lifestyle</p>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="icon">
                            <img src="assets/categIcons/sports.png" alt="Sports Icon" srcset="" width="35" height="35">
                        </div>
                        <div class="txt">
                            <a href="#">
                                <p>Sports & Outdoors</p>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="icon">
                            <img src="assets/categIcons/fashion.png" alt="Fashion Icon" srcset="" width="35"
                                height="35">
                        </div>
                        <div class="txt">
                            <a href="#">
                                <p>Fashion</p>
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="icon">
                            <img src="assets/categIcons/groc.png" alt="Fashion Icon" srcset="" width="35" height="35">
                        </div>
                        <div class="txt">
                            <a href="#">
                                <p>Groceries</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!----------------------- Carousel ------------------------>
            <!-- 
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
                            <img src="assets/ads/ads7.jpg" class="d-block w-100" alt="...">
                            <div class="placedText" style="position: absolue; left: 15%; top: 25%;">
                                <div class="txt">
                                    <h2 style="color: var(--w);">Rush for Toys!</h2>
                                    <p style="padding: 10px; color: var(--w);">Rush over to purchase your kids
                                        <br>favourite heros at affordable prices!
                                    </p>
                                    <a href="#" style="color: var(--w); 
                                    text-decoration-color: var(--w);">
                                        shop now
                                        <svg width="19" height="19" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                                                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/ads/ads1.jpg" class="d-block w-100" alt="Ads1">
                            <div class="placedText">
                                <div class="txt">
                                    <h2>For only #1.99</h2>
                                    <p>You can get your favourite pastries at lower cost</p>
                                    <a href="#">
                                        shop now
                                        <svg width="19" height="19" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                                                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/ads/ads8.jpg" class="d-block w-100" alt="...">
                            <div class="placedText" style="position: absolue; left: 15%; top: 33%;">
                                <div class="txt">
                                    <h2 style="color: var(--blk);">Get High quality <br>Cosmetics!</h2>
                                    <a href="#" style="color: var(--blk);
                                    text-decoration-color: var(--blk);">
                                        shop now
                                        <svg width="19" height="19" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                                                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
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
        </div> -->
    </section>

</body>

</html>