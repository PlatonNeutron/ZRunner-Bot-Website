<?php
	if (isset($_GET['lang']) && $_GET['lang'] == 'fr') {
		require 'fr.php';
		setcookie('ZbotLang', 'fr', time() + 365*24*3600, null, null, false, true);
	} elseif (isset($_GET['lang']) && $_GET['lang'] == 'en') {
		require 'en.php';
		setcookie('ZbotLang', 'en', time() + 365*24*3600, null, null, false, true);
	} elseif ($_COOKIE['ZbotLang'] == 'fr') {
		require 'fr.php';
		setcookie('ZbotLang', 'fr', time() + 365*24*3600, null, null, false, true);
	} else {
		require 'en.php';
		setcookie('ZbotLang', 'en', time() + 365*24*3600, null, null, false, true);
	}