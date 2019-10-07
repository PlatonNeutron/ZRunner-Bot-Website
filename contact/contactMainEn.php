<?php
	$assets_path = '../assets';
	$HomePath = '../';
	$ContactPath = '#';
	$Name = '';
	$Email = '';
	$Message = '';

	if (!empty($_POST)) {
		$Name = htmlspecialchars($_POST['Name']);
		$Email = htmlspecialchars($_POST['Mail']);
		$Message = preg_replace("#\n#", "<br/>", htmlspecialchars($_POST['Message']));

		$SendStatute = '<div id="SendStatute" style="text-align: center; color: white;">
			<h1 class="ColorZbot">Your message has been successfully sent !</h1>
			<h2>You can go back to the <a href="../" style="color: white;">homepage</a> !</h2>
			<h3>Or verify your message. <span onclick="document.getElementById(\'MessageField\').style.display = \'block\';">Click here to display it.</span></h3>
			<div id="MessageField" style="display: none;">
				Name : ' . $Name . ' ; Email : ' . $Email . '. Message : <br/> ' . $Message . '
			</div>
		</div>';

		# echo $Name . ' (' . $Email . ') a envoyé le message suivant :<br/>' . $Message;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zbot - Contact</title>
	<link rel="stylesheet" href="styleAdd.css"/>
	<link rel="stylesheet" href="../style.css"/>
	<link rel="stylesheet" href="../cssEn.css"/>
	<?php require '../translations/HeadEn.php'; ?>
</head>
<body>
	<header>
		<?php require '../translations/HeaderEn.php'; ?>
	</header>

	<div id="Title">
		A question ? A remark ? An idea ?<br/>
		Contact-us !
	</div>

	<form method="post" action="?animation=forcenone">
		<?php
			if (!empty($_POST)) {
				echo $SendStatute;
			} else {
				require 'FormEn.php';
			}
		?>
	</form>

	

	<footer>
		<?php require '../translations/FooterEn.php'; ?>
	</footer>
</body>
</html>