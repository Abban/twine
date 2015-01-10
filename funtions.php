<?php

function cookie_check()
{
	echo 'huh?';
	if(isset($_GET[getenv('APP_PW'))) {
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