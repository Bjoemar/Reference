
<?php require_once "templates.php" ?>

<?php function getTitle(){
	echo "productList";
} ?>

<?php function getContent(){ ?>

	<div class="button">
		<form method="POST" action="controllers/filter_enpoint.php">

		<button name="all" class="btn btn-primary">All</button>	
		
		<button name="tshirt" value="1" class="btn btn-primary">Tshirt</button>
		<button name="jacket" value="2" class="btn btn-primary">jacket</button>
		<button name="cap"  value="3" class="btn btn-primary">cap</button>
		<button name="sortToHigh" value="4" class="btn btn-primary">Price to Highiest</button>
		<button name="sortToLowest" value="5"  class="btn btn-primary">Price to Lowest Price</button>
		</form>
	</div>
	<div class="container">
		
		<?php require "connection.php" ?>
		<?php session_start(); ?>

		<?php if(isset($_SESSION['sort'])) {
			$sql = "SELECT * FROM items ".$_SESSION['sort'];

		} else {

			$sql = "SELECT * FROM items";

		}

	

			$result = mysqli_query($conn,$sql);
		 ?>
		 	 <div class="row">

		 <?php while ($row = mysqli_fetch_assoc($result))  { ?>



		 	<?php if(isset($_SESSION['items'])) { ?>

		 		<?php if($row['category_id'] == $_SESSION['items']) { ?>

		 			<div class="col-6">
			 			<form action="controllers/addToCart.php" method="POST">
					 		<div class="card" style="width:400px">
							  <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image" style="height: 300px; width: 400px;">
							  <div class="card-body">
							    <h4 class="card-title"><?php echo $row['name'] ?></h4> 

							  
							    <p class="card-text">	&#8369;<?php echo $row['price'] ?></p>
							    <input type="number" min="1" name="quantity">
							    <button name="id" value="<?php echo $row['id'] ?>" class="btn btn-primary">Add to cart</button>
							   
							  </div>
							</div>
						</form>
					</div>
		 		<?php } ?> <!-- end row category_id -->



		 		<?php } else { ?>


		 			
	 				<div class="col-6">
	 					<form action="controllers/addToCart.php" method="POST">
					 		<div class="card" style="width:400px">
							  <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image" style="height: 300px; width: 400px;">
							  <div class="card-body">
							    <h4 class="card-title"><?php echo $row['name'] ?></h4>
							     
							    <p class="card-text">	&#8369;<?php echo $row['price'] ?></p>
							      <input type="number" name="quantity">
								    <button name="id" value="<?php echo $row['id'] ?>" class="btn btn-primary">Add to cart</button>

								     <button name="remove" value="<?php echo $row['id'] ?>" class="btn btn-danger">Remove from cart</button>
							  </div>
							</div>
						</form>
					</div>

		 		<?php } ?>
		 	
		
		<?php  } ?>
		</div>	
		

	</div>





<?php } ?>