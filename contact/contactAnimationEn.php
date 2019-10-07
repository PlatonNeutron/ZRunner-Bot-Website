<?php
	$assets_path = '../assets';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Zbot - Contact</title>
	<link rel="stylesheet" href="../style.css"/>
	<link rel="stylesheet" href="styleAdd.css"/>
	<link rel="stylesheet" href="styleAnimation.css"/>
	<link rel="icon" href="<?php echo $assets_path; ?>/logo.png"/>

	<script>
		if (document.body) {
			var larg = (document.body.clientWidth);
			var haut = (document.body.clientHeight);
		} else {
			var larg = (window.innerWidth);
			var haut = (window.innerHeight);
		}

		if (larg <= 1024) {
			document.location.href = "?lang=en&animation=forcenone";
		}
	</script>
</head>
<body>
	<header>
		<div id="Functionnalities"><a href="https://zbot.rtfd.io" class="HeaderLink" target="_blank">Functionnalities</a></div>
		<div id="Logo"><img src="<?php echo $assets_path; ?>/logo.png"/></div>
		<div id="SupportServer"><a href="http://discord.gg/N55zY88" class="HeaderLink" target="_blank">Support server</a></div>
	</header>

	<div id="MainAnimation" align="center">
		<?php
			if (isset($_GET['part']) && $_GET['part'] == 2) {
					echo '<a href="?part=3"><img src="' . $assets_path . '/zrobot_thinking.png" id="ZRobot_Other"/></a>
				<img src="' . $assets_path . '/Bulle_Size2.png" id="Bulle_Size2"/>
				<div id="Text2">
					...<br/>Do you have a question ? A problem ?
				</div>';
			} elseif (isset($_GET['part']) && $_GET['part'] == 3) {
						echo '<a href="?part=4"><img src="' . $assets_path . '/zrobot_happy.png" id="ZRobot_Other"/></a>
					<img src="' . $assets_path . '/Bulle_Size1.png" id="Bulle_Size1"/>
					<div id="Text">
						Send-us a message !
					</div>';
			} elseif (isset($_GET['part']) && $_GET['part'] == 4) {
						echo '<a href="?animation=forcenone"><img src="' . $assets_path . '/zrobot_default.png" id="ZRobot_Other"/></a>
					<img src="' . $assets_path . '/Bulle_Size2.png" id="Bulle_Size2"/>
					<div id="Text2">
						Fill your name, your e-mail<br/>adress, and type your message !
					</div>';
			} else {
				echo '<a href="?part=2"><img src="' . $assets_path . '/zrobot_default.png" id="ZRobot_Default"/></a>
			<img src="' . $assets_path . '/Bulle_Size1.png" id="Bulle_Size1"/>
			<div id="Text">
				Hi ! I\'m ZRobot !
			</div>';
			}
		?>
	</div>

	

	<footer>
		© COPYRIGHT <span class="ColorZbot">ZBOT</span> - 2019<br/>
		WEBSITE DEVELOPPED BY AWHIKAX AND ASSASSIN_CRAFT - DESIGN BY <a href="http://adri526.deviantart.com" target="_blank">ADRI526</a><br/>
		<a href="#" id="Contact">CONTACT</a>

		<div id="Twitter">
			<a href="https://twitter.com/z_runnerr" target="_blank"><img src="<?php echo $assets_path; ?>/twitterimg.png"/></a>
		</div>

		<?php /*<div id="LangSelector">
			<img src="<?php echo $assets_path; ?>/langmenu.png" id="LangSelectorBtn"/>
			<img src="<?php echo $assets_path; ?>/fr.png" class="Flag" id="fr"/>
			<a href="?lang=en"><img src="<?php echo $assets_path; ?>/en.png" class="Flag" id="en"/></a>
		</div>*/ ?>
	</footer>
</body>
</html>