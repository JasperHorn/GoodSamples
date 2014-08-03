<?php

require_once 'bootstrap.php';

$goodLooking = new \Good\Looking\Looking('viewforum.template.html');

require 'sessionUser.php';

// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$forum = new Forum();
$forum->setId($_GET['id']);
$correctForum = new \Good\Manners\Condition\EqualTo($forum);
$fora = $storage->getCollection($correctForum, Forum::resolver());

if ($fullForum = $fora->getNext())
{
	$goodLooking->registerVar('forum', parseForum($fullForum));
}

$topic = new Topic();
$topic->setForum($forum);
$topicsInForum = new \Good\Manners\Condition\EqualTo($topic);

$resolver = Topic::resolver();
$resolver->resolveTopicStarter();
$resolver->orderByTimeLastMessageDesc();

$topics = $storage->getCollection($topicsInForum, $resolver);

$goodLooking->registerVar('topics', $topics);

$goodLooking->display();

?>