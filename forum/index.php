<?php

require_once 'bootstrap.php';

$goodLooking = new \Good\Looking\Looking('index.template.html');

require 'sessionUser.php';


// In a bit of a hack to work around the fact that we cannot yet have no
// condition for a get request on a store, we look for all for a not
// named "forbiddenForum". This should be changed when requesting any
// forum is possible.
$forbiddenForum = new Forum();
$forbiddenForum->setName("forbiddenForum");
$notForbiddenForum = $store->createInequalityCondition($forbiddenForum);


$fora = $store->getForumCollection($notForbiddenForum, Forum::resolver());
$goodLooking->registerVar('fora', parseForumCollection($fora));


$goodLooking->display();

?>
