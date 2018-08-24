<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devie-width , inital-scale=1.0 , maximum-scale=1.0 , shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" contenteditable="IE=Edge">
	<title><?php getTitle(); ?></title>

	<?php require_once "partials/header.php" ?>

</head>
<body>
	<?php require_once "partials/nav.php" ?>
	<div class="container">
		<?php getContent(); ?>
	</div>
</body>
</html>