<?php

	if (isset($_GET['lang']) && $_GET['lang'] == 'fr') {
		if (isset($_GET['animation']) && $_GET['animation'] == 'forcenone') {
			require 'contactMain.php';
		} elseif (!isset($_COOKIE['PlayContactAnimation']) || $_COOKIE['PlayContactAnimation'] == true) {
			require 'contactAnimation.php';
		} else {
			require 'contactMain.php';
		}
		setcookie('ZbotLang', 'fr', time() + 365*24*3600, null, null, false, true);
	} elseif (isset($_GET['lang']) && $_GET['lang'] == 'en') {
		if (isset($_GET['animation']) && $_GET['animation'] == 'forcenone') {
			require 'contactMainEn.php';
		} elseif (!isset($_COOKIE['PlayContactAnimation']) || $_COOKIE['PlayContactAnimation'] == true) {
			require 'contactAnimationEn.php';
		} else {
			require 'contactMainEn.php';
		}
		setcookie('ZbotLang', 'en', time() + 365*24*3600, null, null, false, true);
	} elseif ($_COOKIE['ZbotLang'] == 'fr') {
		if (isset($_GET['animation']) && $_GET['animation'] == 'forcenone') {
			require 'contactMain.php';
		} elseif (!isset($_COOKIE['PlayContactAnimation']) || $_COOKIE['PlayContactAnimation'] == true) {
			require 'contactAnimation.php';
		} else {
			require 'contactMain.php';
		}
		setcookie('ZbotLang', 'fr', time() + 365*24*3600, null, null, false, true);
	} else {
		if (isset($_GET['animation']) && $_GET['animation'] == 'forcenone') {
			require 'contactMainEn.php';
		} elseif (!isset($_COOKIE['PlayContactAnimation']) || $_COOKIE['PlayContactAnimation'] == true) {
			require 'contactAnimationEn.php';
		} else {
			require 'contactMainEn.php';
		}
		setcookie('ZbotLang', 'en', time() + 365*24*3600, null, null, false, true);
	}
	

	

setcookie('PlayContactAnimation', false, time() + 3600*24);

