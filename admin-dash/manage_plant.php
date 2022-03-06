<?php
require('top.inc.php');
isAdmin();
$discount='';
$name='';
$price='';

$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from plants where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$discount=$row['discount'];
		$name=$row['name'];
		$price=$row['price'];
	}else{
		header('location:plant.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$discount=get_safe_value($con,$_POST['discount']);
	$name=get_safe_value($con,$_POST['name']);
	$price=get_safe_value($con,$_POST['price']);
	
	$res=mysqli_query($con,"select * from plants where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="PLANT ALREADY EXIST";
			}
		}else{
			$msg="PLANT ALREADY EXIST";
		}
	}
	
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$update_sql="update plants set discount='$discount',name='$name',price='$price' where id='$id'";
			mysqli_query($con,$update_sql);
		}else{
			mysqli_query($con,"insert into plants(discount,name,price,status) values('$discount','$name','$price',1)");
		}
		header('location:plant.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Plant</strong><small> </small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Discount</label>
									<input type="text" name="discount" placeholder="Enter discount" class="form-control" required value="<?php echo $discount?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">plant name</label>
									<input type="text" name="name" placeholder="Enter plant name" class="form-control" required value="<?php echo $name?>">
								</div>
														
								<div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="text" name="price" placeholder="Enter price" class="form-control" required value="<?php echo $price?>">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">SUBMIT</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         
<?php
require('footer.inc.php');
?>