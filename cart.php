<?php require_once "templates.php" ?>

<?php function getTitle() {
	echo "MYCART";
} ?>



<?php function getContent() { ?>



<?php session_start();



	require "connection.php";
	if (isset($_SESSION['cart'])) {
			$totals = 0;
 	foreach ($_SESSION['cart'] as $key => $value) { 

 	$sql = "SELECT * FROM items WHERE id = $key";



 	$result = mysqli_query($conn,$sql);



 

	 while($row = mysqli_fetch_assoc($result)) { ?>

 	 <div class="container">
 		<div class="row">
 			<div class="col-3"><img src="<?php echo $row['image'] ?>" style="height: 100px; width: 100px;">

 				<form action="controllers/addToCart.php" method="POST">

	 				<input type="number" min="1" name="quantity">
	 				<button name="update" value="<?php echo $row['id']?>" class="btn btn-info" >Update</button>
	 				<button name="remove" value="<?php echo $row['id']?>" class="btn btn-danger" >Remove</button>

 				</form>
 			</div>

 			<div class="col-5">
 				<h2><?php echo $row['name']?></h2>
				<h3><?php echo $value ?></h3>
				<h2><?php echo $row['description']?></h2>
				<h2><?php echo number_format($row['price'] * $value)?></h2>
				 <?php 
				 $totals += $row['price'] * $value;



				 ?>


 			</div>

 		</div>
 		<hr style="background: red;">
		
		
 	</div>




 <?php 
	} // end while 
			
   }  // end for each
  ?>
  		<h2>TOTAL : <?php echo $totals ?></h2>
  	<hr>
   <form action="controllers/addToCart.php" method="POST">
   <button name="empty_cart" class="btn btn-danger">Empty Cart</button>
   </form>

  
  <?php } else { ?>

 	<h1>There is no Item in your cart</h1>

 <?php } ?>
<?php
   }  // end content
    ?>


