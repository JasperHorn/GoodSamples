<?php

require 'bootstrap.php';

session_start();

$user = User::login($store, $_POST['username'], $_POST['password']);

if ($user == null)
{
	$goodLooking = new \Good\Looking\Looking('login.template.html');

	$goodLooking->registerVar('failedLogin', true);
	
	$goodLooking->display();
}
else
{
	$_SESSION['userId'] = $user->getId();
	$_SESSION['username'] = $user->getUsername();
	
	require 'index.php';
}

?>