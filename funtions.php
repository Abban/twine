<?php

function cookie_check()
{
	echo 'huh?';
	if(isset($_GET['penislover123'])) {
		setcookie("preview", "yes", time()+604800, "/");
		header('Location: /');
		exit;
	}

	if(!isset($_COOKIE['preview']) || $_COOKIE['preview'] != "yes") {
		header('Location: http://abandon.ie/');
		exit;
	}
}

cookie_check();