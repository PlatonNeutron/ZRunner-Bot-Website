<?php
	$assets_path = '../assets';
	$HomePath = '../';
	$ContactPath = '../contact/?animation=forcenone';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zbot - Une création de Z_runner</title>
	<link rel="stylesheet" href="../style.css"/>
	<link rel="stylesheet" href="../cssFr.css"/>
	<link rel="stylesheet" href="styleAdd.css"/>
	<?php require '../translations/HeadFr.php'; ?>
</head>
<body>
	<header>
		<?php require '../translations/HeaderFr.php'; ?>
	</header>

	<div id="Main">
		<?php require 'Main.php'; ?>
	</div>

	<footer>
		<?php require '../translations/FooterFr.php'; ?>
	</footer>
</body>
</html>