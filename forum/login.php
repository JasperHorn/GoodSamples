<?php

require_once 'bootstrap.php';

$goodLooking = new \Good\Looking\Looking('login.template.html');

$goodLooking->registerVar('failedLogin', false);

$goodLooking->display();

?>