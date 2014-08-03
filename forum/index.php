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
$notForbiddenForum = new \Good\Manners\Condition\NotEqualTo($forbiddenForum);


$fora = $storage->getCollection($notForbiddenForum, Forum::resolver());

// NOTE: hack because of lacking API
// should be removed when id becomes available as property
$fixedFora = array();
while ($forum = $fora->getNext())
{
    $fixedFora[] = array($forum->getId(), $forum);
}

$goodLooking->registerVar('fora', $fixedFora);


$goodLooking->display();

?>
