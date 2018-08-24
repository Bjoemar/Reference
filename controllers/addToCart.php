<?php 

session_start();




if(isset($_POST['id'])) {

	$id = $_POST['id'];

	

	if (isset($_SESSION['cart'][$id])) {
	$_SESSION['cart'][$id] += $_POST['quantity'];

	$totals += $_POST['price'] * $_POST['quantity'];
	

	// $_SESSION['cart']['totals'] += $_POST['price'];

	} else {

	$_SESSION['cart'][$id] = $_POST['quantity'];
	


	}

	header('location: ../cart.php');
	
}

if(isset($_POST['update'])) {

	$id = $_POST['update'];

	$_SESSION['cart'][$id] += $_POST['quantity'];
	header('location: ../cart.php');
}



if(isset($_POST['remove'])) {
	
	$id = $_POST['remove'];
	unset($_SESSION['cart'][$id]);

	header('location: ../cart.php');
	}



if(isset($_POST['empty_cart'])) {
	
	
	unset($_SESSION['cart']);

	header('location: ../cart.php');
	}

?>











<!-- // // Session Name * the index of name * value of index 
//    $_SESSION['name']['firstname'] = 'joemar';
// 	$_SESSION['name']['lastname'] = 'bacleaan';
 -->


<!-- 
 $_SESSION = [
 	'name' => ['firstname' => ['joemar' =>]]
 ]; -->


