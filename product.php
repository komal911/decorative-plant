<?php include "admin-dash/connection.inc.php";?>

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
<style type="text/css">
    .card{width:33%;}
        .card img{height: 250px;width: 100%;border-radius: 20px 0;}
        .card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);} .card:hover{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 #e8c542;}
      
</style>
</head>
<body>

<header>

    <div class="header-3">

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#category">category</a>
            <a href="product.html">product</a>
            <a href="#deal">deal</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user-circle"></a>
            <a href="admin-dash/login.php">Admin</a>

        </div>

    </div>

</header>

<?php
    $query="SELECT * from plants";
    $fire=mysqli_query($con,$query);
    ?>
<section class="product" id="product">

<h1 class="heading"> new products </h1>

<div class="box-container">
    <?php
        $i=1;
        while($row=mysqli_fetch_assoc($fire)) {                         
        ?>
        <div class="card">
    <div class="box">
        <span class="discount">-<?=$row['discount'];?>%</span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product1.jpg" alt="">
        <h3><?=$row['name'];?></h3>
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
        <div class="price">$<?=$row['price'];?></div>
        <a href="cart.php?id=<?=$row['id'];?>" class="btn">add to cart</a>
    </div>
</div>
            <?php }?>

   
</div>

</section>

<a href="#" class="scroll-top fas fa-angle-up"></a>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>
</body>
</html>