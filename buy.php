<?php include "admin-dash/connection.inc.php";?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
    .card{width:33%;}
        .card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);} .card:hover{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 #e8c542;}
        .product{margin:2rem;}
</style>
</head>
<body>
		<div class="product">
			<?php
			$id=$_GET['id'];
      $query="SELECT * from plants where id='".$id."'";
      $fire=mysqli_query($con,$query);
      ?>
        <div class="box-container">
          <?php
              $i=1;
              while($row=mysqli_fetch_assoc($fire)) {                         
              ?>
              <div class="card">
                <div class="box" style="padding: 10%;">
                  <h3 class="font-weight-bold">Receipt</h3>
                       <h3><span readonly>Plant:</span>
                        <span readonly><?=$row['name'];?></span></h3>
                    <div class="quantity">
                      <h4 style="float: left;"><span readonly>Quantity</span></h4>
                      <span readonly><input style="margin: 1%; font-size: 15px;" class="bg-white font-weight-bold text-dark" type="number" id="qun" value="4"></span><br>
                      <h4 style="float: left;"><span readonly>Price</span></h4>
                      <span data-prefix>$</span><span readonly><input style="margin: 1%; font-size: 15px;" class="bg-white font-weight-bold text-dark" type="number" id="price" value="<?=$row['price'];?>"></span><br>
                      <h4 style="float: left;"><span readonly>Total Price</span></h4>
                      <span data-prefix>$</span><input style="margin: 1%; font-size: 15px;" class="bg-white font-weight-bold text-dark" type="number" id="total" onmouseover="caltotal();">
                    </div>  
                    <a href="#" class="btn">Buy</a>
                </div>
            </div>
          <?php } ?>
        </div>
				<button class="toggle btn btn-success" style="margin: 1%;">Cash On Delivery</button>
			<div class="demo"> 
				<textarea placeholder="Please Enter Address For Delivery" rows="5" cols="60" style="border: 2px solid black;"></textarea>
			</div>
			<script type="text/javascript">
				function caltotal(){
					var a= document.getElementById('price').value;
					var b= document.getElementById('qun').value;
					var total=0;
						total=Number(a)*Number(b);
					document.getElementById('total').value=total;
				}
			</script>
			
	  </div>
  
    
</body>
</html>