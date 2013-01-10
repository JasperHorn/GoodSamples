<?php

require_once 'bootstrap.php';

$goodLooking = new GoodLooking('login.template.html');

$goodLooking->registerVar('failedLogin', false);

$goodLooking->display();

?>