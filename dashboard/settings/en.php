<?php
	$assets_path = '../../assets';
	$HomePath = '../../';
	$ContactPath = '../../contact/?animation=forcenone';

	// Traitement du formulaire de paramètres
	if (!empty($_POST)) {
		setcookie('ZbotDashboard_DiscordDisplayMode', htmlspecialchars($_POST['DiscordDisplayMode']), time() + 365*24*3600, null, null, false, true);
		setcookie('ZbotDashboard_DiscordDisplayServerID', htmlspecialchars($_POST['ServerID']), time() + 365*24*3600, null, null, false, true);
		setcookie('ZbotDashboard_DiscordDisplayChannelID', htmlspecialchars($_POST['ChannelID']), time() + 365*24*3600, null, null, false, true);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zbot - Dashboard</title>
	<link rel="stylesheet" href="styleAdd.css"/>
	<link rel="stylesheet" href="../../style.css"/>
	<link rel="stylesheet" href="../../cssEn.css"/>
	<?php require '../../translations/HeadEn.php'; ?>
</head>
<body>
	<header>
		<?php require '../../translations/HeaderEn.php'; ?>
	</header>

	<h1 id="Title">
		<b>Dashboard</b>
	</h1>
	
	<?php require '../translations/SettingsEn.php'; ?>

	<footer>
		<?php require '../../translations/FooterEn.php'; ?>
	</footer>
</body>
</html>