<?php
	$assets_path = 'assets';
	$HomePath = '#';
	$ContactPath = 'contact/?animation=forcenone';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zbot - A Z_runner's creation</title>
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="cssEn.css"/>
	<?php require 'translations/HeadEn.php'; ?>
</head>
<body>
	<header>
		<?php require 'translations/HeaderEn.php'; ?>
	</header>

	<div id="FirstAnnounce">
		<?php include 'translations/FirstAnnounceEn.php'; ?>
	</div>
	<div id="SecondAnnounce">
		<?php include 'translations/SecondAnnounceEn.php'; ?>
	</div>

	<div id="Invite">
		<a href="invite/" target="_blank"><img src="<?php echo $assets_path; ?>/invitebuttonen.png"/></a>
	</div>

	<footer>
		<?php require 'translations/FooterEn.php'; ?>
	</footer>
</body>
</html>