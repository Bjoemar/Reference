<?php 

session_start();

	if(isset($_POST['tshirt'])) {

		 $_SESSION['items'] = 1;
		 header('location: ../productlist.php');


	}


	if(isset($_POST['jacket'])) {

		 $_SESSION['items'] = 2;
		 header('location: ../productlist.php');


	}

	if(isset($_POST['cap'])) {

		 $_SESSION['items'] = 3;
		 header('location: ../productlist.php');


	}


	if(isset($_POST['all'])) {

		 unset($_SESSION['items']);
		 unset($_SESSION['sort']);


		 header('location: ../productlist.php');


	}

	if(isset($_POST['sortToHigh'])) {
		$_SESSION['sort'] = 'ORDER BY price DESC';
		header('location: ../productlist.php');

	}

	if(isset($_POST['sortToLowest'])) {
		$_SESSION['sort'] = 'ORDER BY price ASC';
		header('location: ../productlist.php');

	}
 ?>


