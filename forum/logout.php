<?php

require 'bootstrap.php';

session_start();

unset($_SESSION['userId']);
unset($_SESSION['username']);

require 'index.php';

?>