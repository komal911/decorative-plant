<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header>

    <div class="header-3">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="category.php">category</a>
            <a href="product.php">product</a>
            <a href="#">deal</a>
            <a href="#">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
           <a href="login.php" class="fas fa-user-circle"></a>
            <a href="admin-dash/login.php">Admin</a>

        </div>

    </div>

</header>

<section class="category" id="category">

<h1 class="heading"> Category </h1>

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

<a href="#" class="scroll-top fas fa-angle-up"></a>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>
</body>
</html>