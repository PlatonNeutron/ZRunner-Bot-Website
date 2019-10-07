<?php
	$assets_path = '../assets';
	$HomePath = '../';
	$ContactPath = '../contact/?animation=forcenone';

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
	<title>Zbot - Tableau de configuration</title>
	<link rel="stylesheet" href="../style.css"/>
	<link rel="stylesheet" href="styleAdd.css"/>
	<link rel="stylesheet" href="../cssFr.css"/>
	<?php require '../translations/HeadFr.php'; ?>
</head>
<body style="background-color: #303539; background-image: url('');">
	<header>
		<?php require '../translations/HeaderFr.php'; ?>
	</header>

	<h1 id="Title">
		BIENVENUE SUR LE DASHBOARD !<br/>
		VOUS POUVEZ ICI CONFIGURER LE SERVEUR à VOTRE GUISE.
	</h1>

	<?php require 'translations/DashboardFr.php'; ?>		

	<footer>
		<div style="padding-top: 20%;"></div>
		<?php require '../translations/FooterFr.php'; ?>
	</footer>
</body>
</html>