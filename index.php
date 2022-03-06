<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="header-1">

        <div class="share">
            <span> follow us : </span>
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

        <div class="call">
            <span> call us : </span>
            <a href="#">+123-456-7890</a>
        </div>

    </div>

    <div class="header-2">

        <a href="#" class="logo"> <i class="fas fa-seedling"></i> LOGO </a>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-3">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="category.php">category</a>
            <a href="product.php">product</a>
            <a href="#deal">deal</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user-circle"></a>
            <a href="admin-dash/login.php">Admin</a>

        </div>

    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider1.jpg);">
                    <div class="content">
                        <span>upto 75% off</span>
                        <h3>plant big sale special offer</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider2.jpg);">
                    <div class="content">
                        <span>upto 45% off</span>
                        <h3>plant make people happy</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box" style="background: url(images/slider3.jpg);">
                    <div class="content">
                        <span>upto 65% off</span>
                        <h3>decorate your home now</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner-container">

    <div class="banner">
        <img src="images/banner1.jpg" alt="">
        <div class="content">
            <span>new arrivals</span>
            <h3>house plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="banner">
        <img src="images/banner2.jpg" alt="">
        <div class="content">
            <span>new arrivals</span>
            <h3>office plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</section>

<!-- banner section ends -->

<!-- category section starts  -->

<section class="category" id="category">

<h1 class="heading"> shop by category </h1>

<div class="box-container">

    <div class="box">
        <img src="images/cat1.jpg" alt="">
        <div class="content">
            <h3>bonsai</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat2.jpg" alt="">
        <div class="content">
            <h3>plants for house</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat3.jpg" alt="">
        <div class="content">
            <h3>plants for office</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
    <div class="box">
        <img src="images/cat4.jpg" alt="">
        <div class="content">
            <h3>gift plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</div>

</section>

<!-- category section ends -->

<!-- product section starts  -->

<section class="product" id="product">

<h1 class="heading"> new products </h1>

<div class="box-container">

    <div class="box">
        <span class="discount">-10%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product1.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-25%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product2.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-7%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product3.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-4%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product4.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-13%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product5.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <span class="discount">-20%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product6.jpg" alt="">
        <h3>latest plants</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <div class="quantity">
            <span> quantity : </span>
            <input type="number" min="1" max="100" value="1">
        </div>
        <div class="price">$14.70 <span>$18.20</span></div>
        <a href="#" class="btn">add to cart</a>
    </div>

</div>

</section>

<!-- product section ends -->

<!-- .icons section starts  -->

<section class="icons-container">

    <div class="icon">
        <img src="images/icon1.png" alt="">
        <div class="content">
            <h3>free shipping</h3>
            <p>Free shipping on order</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon2.png" alt="">
        <div class="content">
            <h3>100% Money Back</h3>
            <p>You’ve 30 days to Return</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon3.png" alt="">
        <div class="content">
            <h3>Payment Secure</h3>
            <p>100% secure payment</p>
        </div>
    </div>
    <div class="icon">
        <img src="images/icon4.png" alt="">
        <div class="content">
            <h3>Support 24/7</h3>
            <p>Contact us anytime</p>
        </div>
    </div>

</section>

<!-- .icons section ends -->

<!-- deal section starts  -->

<section class="deal" id="deal">

    <h1 class="heading"> deal of the day </h1>

    <div class="row">

        <div class="content">
            <h3 class="title">don't miss the deal</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae rem eligendi repudiandae pariatur. Aut, esse molestias laborum sunt reprehenderit repellat officiis aspernatur consequatur nemo! Veritatis, ex architecto! Eligendi, iste nulla.</p>
            <div class="count-down">
                <div class="box">
                    <h3 id="day">00</h3>
                    <span>day</span>
                </div>
                <div class="box">
                    <h3 id="hour">00</h3>
                    <span>hour</span>
                </div>
                <div class="box">
                    <h3 id="minute">00</h3>
                    <span>minute</span>
                </div>
                <div class="box">
                    <h3 id="second">00</h3>
                    <span>second</span>
                </div>
            </div>
            <a href="#" class="btn">check out deal</a>
        </div>

        <div class="image">
            <img src="images/deal-img.jpg" alt="">
        </div>

    </div>

</section>

<!-- deal section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading">get in touch</h1>

<div class="row">

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.895920873054!2d72.83196972644954!3d19.141670564195152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1621609263469!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

    <form action="">

        <div class="inputBox">
            <input type="text" required>
            <label>name</label>
        </div>
        <div class="inputBox">
            <input type="email" required>
            <label>email</label>
        </div>
        <div class="inputBox">
            <input type="number" required>
            <label>number</label>
        </div>
        <div class="inputBox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" value="send message" class="btn">

    </form>

</div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo hic eum veniam aut nisi. Libero autem nemo amet recusandae eveniet?</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">category</a>
            <a href="#">product</a>
            <a href="#">deal</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linked</a>
        </div>

    </div>

    
</section>

<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="scroll-top fas fa-angle-up"></a>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>