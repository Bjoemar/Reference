<?php 

	require "../connection.php";


	$sample = $_FILES['productImage']['name'];
	$imageFileType = strtolower(pathinfo($sample,PATHINFO_EXTENSION));
	$p_name = mysqli_escape_string($conn,$_POST['productName']);
	$p_categories = mysqli_escape_string($conn,$_POST['productCategories']);
	$p_price = mysqli_escape_string($conn,$_POST['productPrice']);
	$p_description = mysqli_escape_string($conn,$_POST['productDescription']);
	$img_add = 'assets/images/product_images/'.time($_FILES['productImage']['name']) .'.'.$imageFileType;

	move_uploaded_file($_FILES['productImage']['tmp_name'], '../'.$img_add);


	$sql = "INSERT INTO items(name,description,price,image,category_id) VALUES('$p_name' ,'$p_description' , $p_price , '$img_add' , $p_categories)";

	mysqli_query($conn , $sql);

	header('location: ../index.php')
	 

 ?>