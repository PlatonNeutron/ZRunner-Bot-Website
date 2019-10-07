<?php
	/*try {
		$bdd = new PDO('mysql:host=localhost;dbname=zbot;charset=utf8', 'root', '');
	} catch (Exception $e) {
	        die('Erreur : ' . $e->getMessage());
	}*/

	$assets_path = '../assets';
	$HomePath = '../';
	$ContactPath = '#';
	$Name = '';
	$Email = '';
	$Message = '';
	$Date = date("F j, Y, g:i a");

	if (!empty($_POST)) {
		$Name = htmlspecialchars($_POST['Name']);
		$Email = htmlspecialchars($_POST['Mail']);
		$Message = preg_replace("#\n#", "<br/>", htmlspecialchars($_POST['Message']));

		$SendStatute = '<div id="SendStatute" style="text-align: center; color: white;">
			<h1 class="ColorZbot">Votre message a été envoyé !</h1>
			<h2>Vous pouvez retourner à <a href="../" style="color: white;">la page d\'accueil</a> !</h2>
			<h3>Ou vérifier votre message. <span onclick="document.getElementById(\'MessageField\').style.display = \'block\';">Cliquez-ici pour le consulter.</span></h3>
			<div id="MessageField" style="display: none;">
				Nom : ' . $Name . ' ; Email : ' . $Email . '. Message : <br/> ' . $Message . '
			</div>
		</div>';
		}

		/*$req = $bdd->prepare('INSERT INTO messages(Nom, Message, Mail, Date, ) VALUES(:Nom, :Message, :Mail, :Date)');
		if ($req->execute(array(
			'Nom' => $Name,
			'Message' => $Message,
			'Mail' => $Email,
			'Date' => $Date
			));) {
			$SendStatute = '<div id="SendStatute" style="text-align: center; color: white;">
			<h1 class="ColorZbot">Votre message a été envoyé !</h1>
			<h2>Vous pouvez retourner à <a href="../" style="color: white;">la page d\'accueil</a> !</h2>
			<h3>Ou vérifier votre message. <span onclick="document.getElementById(\'MessageField\').style.display = \'block\';">Cliquez-ici pour le consulter.</span></h3>
			<div id="MessageField" style="display: none;">
				Nom : ' . $Name . ' ; Email : ' . $Email . '. Message : <br/> ' . $Message . '
			</div>
		</div>';
		}*/

		# echo $Name . ' (' . $Email . ') a envoyé le message suivant :<br/>' . $Message;
	#}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zbot - Contact</title>
	<link rel="stylesheet" href="styleAdd.css"/>
	<link rel="stylesheet" href="../style.css"/>
	<link rel="stylesheet" href="../cssFr.css"/>
	<?php require '../translations/HeadFr.php'; ?>
</head>
<body>
	<header>
		<?php require '../translations/HeaderFr.php'; ?>
	</header>

	<div id="Title">
		Une question ? Une remarque ? Une idée ?<br/>
		Contactez-nous !
	</div>

	<form method="post" action="?animation=forcenone">
		<?php
			if (!empty($_POST)) {
				echo $SendStatute;
			} else {
				require 'Form.php';
			}
		?>
	</form>

	

	<footer>
		<?php require '../translations/FooterFr.php'; ?>
	</footer>
</body>
</html>