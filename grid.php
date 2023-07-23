<style>
.sales .max-width {
    display: block;
    justify-content: space-evenly;
    align-items: center;
}

.sales .max-width .above .color i {
    color: var(--w);
}


.sales .max-width .middle {
    display: flex;
}

.sales .max-width .middle .row {
    display: grid;
}

.sales .max-width .middle .row .content {
    background: var(--w);
    width: 21.8vw;
    height: 57vh;
    padding: 7px;
    margin: 1%;
}

.sales .max-width .middle .row .content .img img {
    width: 298px;
    height: 298px;
}

.sales .max-width .middle .row .content .cnt-text .up {
    display: block;
    /* justify-content: space-evenly; */
    align-items: center;
    padding-top: 5%;
}

.sales .max-width .middle .row .content .cnt-text .up .h {
    font-size: 17px;
    letter-spacing: .5px;
    font-weight: 500;
    font-family: var(--av), sans-serif;
    border: 1px solid var(--w);
    outline: none;

}


.sales .max-width .middle .row .content .cnt-text .up .p {
    font-size: 15px;
    font-weight: 300;
    font-family: var(--av), sans-serif;
    color: var(--ck);
    border: 1px solid var(--w);
    width: 30%;
}

.sales .max-width .middle .row .content .cnt-text .up label {
    font-size: 17px;
    font-weight: 200;
    font-family: var(--av), sans-serif;
    color: var(--ck);
}

.sales .max-width .middle .row .content .cnt-text .middle {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 6%;
}

.sales .max-width .middle .row .content .cnt-text .middle .m-left {
    font-size: 17px;
    font-weight: 300;
    font-family: var(--av), sans-serif;
    display: flex;
    align-items: center;
}

.sales .max-width .middle .row .content .cnt-text .middle .m-right {
    display: flex;
    align-items: center;
    font-size: 17px;
    font-weight: 300;
    font-family: var(--av), sans-serif;
}

.sales .max-width .middle .row .content .cnt-text .down {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 3%;
}

.sales .max-width .middle .row .content .cnt-text .down button i {
    color: var(--w);
    font-size: 18px;
}
</style>

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
    <!-- <title>The Rush || inspired by dreams - Registration</title> -->
    <script src="https://kit.fontawesome.com/032421aa45.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section id="sales" name="sales" style="height: 100vh; background-color: var(--ash3);">
        <div class="max-width">
            <div class=" above" style="display: flex; align-items: center;">
                <div class="color"
                    style="background-color: var(--pk); width: 30px; height: 35px; border-radius: 7px; justify-content: center; align-items: center; text-align: center; margin-right: 2%;">
                    <i class="fa-solid fa-paperclip" style=" color: var(--w);"></i>
                </div>
                <h5>Today's deal</h5>
            </div>
            <div class="middle">
                <div class='row' style="display: flex; justify-content: space-between; flex-wrap: wrap;">
                    <form class='content'
                        style="border: 1px solid var(--blk); align-items: center; background-color: var(--w); padding: 3px 3px; width: 19.3rem;"
                        action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class='img' style="position: relative;">
                            <img src='assets/ads/ads5.jpg' alt=''
                                style="object-fit: cover; width: 300px; height: 300px;">
                            <div class="content" style="">
                                <div class="t">
                                    <p
                                        style="position: absolute; top: 2%; left: 2%; background: var(--cr); color: var(--w); padding: 5px 10px; border-radius: 7px; font-size: 16px;">
                                        -40%
                                    </p>
                                    <img style="cursor: pointer; padding: 5px; position: absolute; top: 2%; right: 2%; background-color: var(--w); border-radius: 50%;"
                                        src="assets/like.png" alt="Like-List Icon" width="32" height="32">
                                </div>
                                <div class="m"></div>
                                <div class="b">
                                    <button type="submit" name="cart"
                                        style="position: absolute; bottom: 0%; background-color: var(--blk); border: 1px solid var(--blk); color: var(--w); padding: 12px 10px; width: 300px;">Add
                                        to
                                        cart
                                        <img style="background-color: var(--w);" src="assets/cart.png" alt="Cart Icon"
                                            width="30" height="30"></button>
                                </div>
                            </div>
                        </div>
                        <div class='cnt-text' style=" padding: 10px 0 0 0;">
                            <div class='name' style="margin-bottom: 10px;">
                                <input class=" h" type="text" name="name" value="My Product"
                                    style="outline: none; border: none;">
                            </div>
                            <div class="price" style="display: flex; align-items: center; text-align: center;">
                                $<input class="p" type="text" name="price" value="120"
                                    style="width: 40px; outline: none; border: none; color: var(--cr); ">
                                <p style="margin-top: 12px; text-decoration: line-through; color: var(--ash1);">
                                    $160</p>
                            </div>
                            <input type=" number" name="q" value="" hidden>
                            <input type=" text" name="rate" value="" hidden>
                            <div class='middle'>
                                <div class='m-left'><svg style='color: gold;' width='23' height='23' viewBox='0 0 15 15'
                                        fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path
                                            d='M7.22303 0.665992C7.32551 0.419604 7.67454 0.419604 7.77702 0.665992L9.41343 4.60039C9.45663 4.70426 9.55432 4.77523 9.66645 4.78422L13.914 5.12475C14.18 5.14607 14.2878 5.47802 14.0852 5.65162L10.849 8.42374C10.7636 8.49692 10.7263 8.61176 10.7524 8.72118L11.7411 12.866C11.803 13.1256 11.5206 13.3308 11.2929 13.1917L7.6564 10.9705C7.5604 10.9119 7.43965 10.9119 7.34365 10.9705L3.70718 13.1917C3.47945 13.3308 3.19708 13.1256 3.25899 12.866L4.24769 8.72118C4.2738 8.61176 4.23648 8.49692 4.15105 8.42374L0.914889 5.65162C0.712228 5.47802 0.820086 5.14607 1.08608 5.12475L5.3336 4.  78422C5.44573 4.77523 5.54342 4.70426 5.58662 4.60039L7.22303 0.665992Z'
                                            fill='currentColor'></path>
                                    </svg><svg id='star' style='color: gold;' width='23' height='23' viewBox='0 0 15 15'
                                        fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path
                                            d='M6.97942 1.25171L6.9585 1.30199L5.58662 4.60039C5.54342 4.70426 5.44573 4.77523 5.3336 4.78422L1.7727 5.0697L1.71841 5.07405L1.38687 5.10063L1.08608 5.12475C0.820085 5.14607 0.712228 5.47802 0.914889 5.65162L1.14406 5.84793L1.39666 6.06431L1.43802 6.09974L4.15105 8.42374C4.23648 8.49692 4.2738 8.61176 4.24769 8.72118L3.41882 12.196L3.40618 12.249L3.32901 12.5725L3.25899 12.866C3.19708 13.1256 3.47945 13.3308 3.70718 13.1917L3.9647 13.0344L4.24854 12.861L4.29502 12.8326L7.34365 10.9705C7.43965 10.9119 7.5604 10.9119 7.6564 10.9705L10.705 12.8326L10.7515 12.861L11.0354 13.0344L11.2929 13.1917C11.5206 13.3308 11.803 13.1256 11.7411 12.866L11.671 12.5725L11.5939 12.249L11.5812 12.196L10.7524 8.72118C10.7263 8.61176 10.7636 8.49692 10.849 8.42374L13.562 6.09974L13.6034 6.06431L13.856 5.84793L14.0852 5.65162C14.2878 5.47802 14.18 5.14607 13.914 5.12475L13.6132 5.10063L13.2816 5.07405L13.2274 5.0697L9.66645 4.78422C9.55432 4.77523 9.45663 4.70426 9.41343 4.60039L8.04155 1.30199L8.02064 1.25171L7.89291 0.944609L7.77702 0.665992C7.67454 0.419604 7.32551 0.419604 7.22303 0.665992L7.10715 0.944609L6.97942 1.25171ZM7.50003 2.60397L6.50994 4.98442C6.32273 5.43453 5.89944 5.74207 5.41351 5.78103L2.84361 5.98705L4.8016 7.66428C5.17183 7.98142 5.33351 8.47903 5.2204 8.95321L4.62221 11.461L6.8224 10.1171C7.23842 9.86302 7.76164 9.86302 8.17766 10.1171L10.3778 11.461L9.77965 8.95321C9.66654 8.47903 9.82822 7.98142 10.1984 7.66428L12.1564 5.98705L9.58654 5.78103C9.10061 5.74207 8.67732 5.43453 8.49011 4.98442L7.50003 2.60397Z'
                                            fill='currentColor' fill-rule='evenodd' clip-rule='evenodd'></path>
                                    </svg><svg id='star' style='color: gold;' width='23' height='23' viewBox='0 0 15 15'
                                        fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path
                                            d='M6.97942 1.25171L6.9585 1.30199L5.58662 4.60039C5.54342 4.70426 5.44573 4.77523 5.3336 4.78422L1.7727 5.0697L1.71841 5.07405L1.38687 5.10063L1.08608 5.12475C0.820085 5.14607 0.712228 5.47802 0.914889 5.65162L1.14406 5.84793L1.39666 6.06431L1.43802 6.09974L4.15105 8.42374C4.23648 8.49692 4.2738 8.61176 4.24769 8.72118L3.41882 12.196L3.40618 12.249L3.32901 12.5725L3.25899 12.866C3.19708 13.1256 3.47945 13.3308 3.70718 13.1917L3.9647 13.0344L4.24854 12.861L4.29502 12.8326L7.34365 10.9705C7.43965 10.9119 7.5604 10.9119 7.6564 10.9705L10.705 12.8326L10.7515 12.861L11.0354 13.0344L11.2929 13.1917C11.5206 13.3308 11.803 13.1256 11.7411 12.866L11.671 12.5725L11.5939 12.249L11.5812 12.196L10.7524 8.72118C10.7263 8.61176 10.7636 8.49692 10.849 8.42374L13.562 6.09974L13.6034 6.06431L13.856 5.84793L14.0852 5.65162C14.2878 5.47802 14.18 5.14607 13.914 5.12475L13.6132 5.10063L13.2816 5.07405L13.2274 5.0697L9.66645 4.78422C9.55432 4.77523 9.45663 4.70426 9.41343 4.60039L8.04155 1.30199L8.02064 1.25171L7.89291 0.944609L7.77702 0.665992C7.67454 0.419604 7.32551 0.419604 7.22303 0.665992L7.10715 0.944609L6.97942 1.25171ZM7.50003 2.60397L6.50994 4.98442C6.32273 5.43453 5.89944 5.74207 5.41351 5.78103L2.84361 5.98705L4.8016 7.66428C5.17183 7.98142 5.33351 8.47903 5.2204 8.95321L4.62221 11.461L6.8224 10.1171C7.23842 9.86302 7.76164 9.86302 8.17766 10.1171L10.3778 11.461L9.77965 8.95321C9.66654 8.47903 9.82822 7.98142 10.1984 7.66428L12.1564 5.98705L9.58654 5.78103C9.10061 5.74207 8.67732 5.43453 8.49011 4.98442L7.50003 2.60397Z'
                                            fill='currentColor' fill-rule='evenodd' clip-rule='evenodd'></path>
                                    </svg><svg id='star' style='color: gold;' width='23' height='23' viewBox='0 0 15 15'
                                        fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path
                                            d='M6.97942 1.25171L6.9585 1.30199L5.58662 4.60039C5.54342 4.70426 5.44573 4.77523 5.3336 4.78422L1.7727 5.0697L1.71841 5.07405L1.38687 5.10063L1.08608 5.12475C0.820085 5.14607 0.712228 5.47802 0.914889 5.65162L1.14406 5.84793L1.39666 6.06431L1.43802 6.09974L4.15105 8.42374C4.23648 8.49692 4.2738 8.61176 4.24769 8.72118L3.41882 12.196L3.40618 12.249L3.32901 12.5725L3.25899 12.866C3.19708 13.1256 3.47945 13.3308 3.70718 13.1917L3.9647 13.0344L4.24854 12.861L4.29502 12.8326L7.34365 10.9705C7.43965 10.9119 7.5604 10.9119 7.6564 10.9705L10.705 12.8326L10.7515 12.861L11.0354 13.0344L11.2929 13.1917C11.5206 13.3308 11.803 13.1256 11.7411 12.866L11.671 12.5725L11.5939 12.249L11.5812 12.196L10.7524 8.72118C10.7263 8.61176 10.7636 8.49692 10.849 8.42374L13.562 6.09974L13.6034 6.06431L13.856 5.84793L14.0852 5.65162C14.2878 5.47802 14.18 5.14607 13.914 5.12475L13.6132 5.10063L13.2816 5.07405L13.2274 5.0697L9.66645 4.78422C9.55432 4.77523 9.45663 4.70426 9.41343 4.60039L8.04155 1.30199L8.02064 1.25171L7.89291 0.944609L7.77702 0.665992C7.67454 0.419604 7.32551 0.419604 7.22303 0.665992L7.10715 0.944609L6.97942 1.25171ZM7.50003 2.60397L6.50994 4.98442C6.32273 5.43453 5.89944 5.74207 5.41351 5.78103L2.84361 5.98705L4.8016 7.66428C5.17183 7.98142 5.33351 8.47903 5.2204 8.95321L4.62221 11.461L6.8224 10.1171C7.23842 9.86302 7.76164 9.86302 8.17766 10.1171L10.3778 11.461L9.77965 8.95321C9.66654 8.47903 9.82822 7.98142 10.1984 7.66428L12.1564 5.98705L9.58654 5.78103C9.10061 5.74207 8.67732 5.43453 8.49011 4.98442L7.50003 2.60397Z'
                                            fill='currentColor' fill-rule='evenodd' clip-rule='evenodd'></path>
                                    </svg><svg id='star' style='color: gold;' width='23' height='23' viewBox='0 0 15 15'
                                        fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path
                                            d='M6.97942 1.25171L6.9585 1.30199L5.58662 4.60039C5.54342 4.70426 5.44573 4.77523 5.3336 4.78422L1.7727 5.0697L1.71841 5.07405L1.38687 5.10063L1.08608 5.12475C0.820085 5.14607 0.712228 5.47802 0.914889 5.65162L1.14406 5.84793L1.39666 6.06431L1.43802 6.09974L4.15105 8.42374C4.23648 8.49692 4.2738 8.61176 4.24769 8.72118L3.41882 12.196L3.40618 12.249L3.32901 12.5725L3.25899 12.866C3.19708 13.1256 3.47945 13.3308 3.70718 13.1917L3.9647 13.0344L4.24854 12.861L4.29502 12.8326L7.34365 10.9705C7.43965 10.9119 7.5604 10.9119 7.6564 10.9705L10.705 12.8326L10.7515 12.861L11.0354 13.0344L11.2929 13.1917C11.5206 13.3308 11.803 13.1256 11.7411 12.866L11.671 12.5725L11.5939 12.249L11.5812 12.196L10.7524 8.72118C10.7263 8.61176 10.7636 8.49692 10.849 8.42374L13.562 6.09974L13.6034 6.06431L13.856 5.84793L14.0852 5.65162C14.2878 5.47802 14.18 5.14607 13.914 5.12475L13.6132 5.10063L13.2816 5.07405L13.2274 5.0697L9.66645 4.78422C9.55432 4.77523 9.45663 4.70426 9.41343 4.60039L8.04155 1.30199L8.02064 1.25171L7.89291 0.944609L7.77702 0.665992C7.67454 0.419604 7.32551 0.419604 7.22303 0.665992L7.10715 0.944609L6.97942 1.25171ZM7.50003 2.60397L6.50994 4.98442C6.32273 5.43453 5.89944 5.74207 5.41351 5.78103L2.84361 5.98705L4.8016 7.66428C5.17183 7.98142 5.33351 8.47903 5.2204 8.95321L4.62221 11.461L6.8224 10.1171C7.23842 9.86302 7.76164 9.86302 8.17766 10.1171L10.3778 11.461L9.77965 8.95321C9.66654 8.47903 9.82822 7.98142 10.  1984 7.66428L12.1564 5.98705L9.58654 5.78103C9.10061 5.74207 8.67732 5.43453 8.49011 4.98442L7.50003 2.60397Z'
                                            fill='currentColor' fill-rule='evenodd' clip-rule='evenodd'></path>
                                    </svg>
                                    (10)</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>