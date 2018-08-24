<?php require_once "templates.php" ?>

<?php function getTitle() {
	echo "Homepage";
} ?>


<?php function getContent() { ?>



	<form action="controllers/addProduct_endpoint.php" enctype="multipart/form-data" method="POST">
		<div class="form-group">
			<label>Product name:</label>
			<input type="text" name="productName">
		</div>

		<div class="form-group">
			<label>Categories</label>
			<select name="productCategories">
				<?php
					require 'connection.php';
				 $sql = "SELECT * FROM categories";
				 $result = mysqli_query($conn ,$sql) ;

				 while($row = mysqli_fetch_assoc($result)) { ?>
				 	<option value="<?php echo $row['id'] ?>"><?php echo $row['name']?></option>

				<?php  } mysqli_close($conn)
				  ?>
			</select>
		</div>

		<div class="form-group">
			<label>Product price:</label>
			<input type="number" name="productPrice">
		</div>

		<div class="form-group">
			<label>Product Description:</label>
			<input type="text" name="productDescription">
		</div>

		<div class="form-group">
			<label>Product image:</label>
			<input type="file" name="productImage">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>


	</form>


<?php } ?>