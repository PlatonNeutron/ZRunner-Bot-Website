<?php
	$assets_path = 'assets';
	$HomePath = '#';
	$ContactPath = 'contact/?animation=forcenone';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Zbot - Une création de Z_runner</title>
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="cssFr.css"/>
	<?php require 'translations/HeadFr.php'; ?>
</head>
<body>
	<header>
		<?php require 'translations/HeaderFr.php'; ?>
	</header>

	<div id="FirstAnnounce">
		<?php include 'translations/FirstAnnounceFr.php'; ?>
	</div>
	<div id="SecondAnnounce">
		<?php include 'translations/SecondAnnounceFr.php'; ?>
	</div>

	<div id="Invite">
		<a href="invite/" target="_blank"><img src="<?php echo $assets_path; ?>/invitebutton.png"/></a>
	</div>

	<footer>
		<?php require 'translations/FooterFr.php'; ?>
	</footer>
</body>
</html>