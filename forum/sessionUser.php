<?php

if (session_id() == "")
{
	session_start();
}

if (!isset($_SESSION['userId']) || !isset($_SESSION['username']))
{
	$goodLooking->registerVar('loggedIn', false);
	$goodLooking->registerVar('username', '');
}
else
{
	$goodLooking->registerVar('loggedIn', true);
	$goodLooking->registerVar('username', $_SESSION['username']);
}

?>