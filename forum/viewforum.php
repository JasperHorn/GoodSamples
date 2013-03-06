<?php

require_once 'bootstrap.php';

$goodLooking = new \Good\Looking\Looking('viewforum.template.html');

require 'sessionUser.php';

// This $forum bit can be made loads and loads better when
// the planned syntactic sugar is there
$forum = Forum::createDummy($_GET['id']);
$correctForum = $store->createEqualityCondition($forum);
$fora = $store->getForumCollection($correctForum, Forum::resolver());

if ($fullForum = $fora->getNext())
{
	$goodLooking->registerVar('forum', parseForum($fullForum));
}

$topic = new Topic();
$topic->setForum($forum);
$topicsInForum = $store->createEqualityCondition($topic);

$resolver = Topic::resolver();
$resolver->resolveTopicStarter();
$resolver->orderByTimeLastMessageDesc();

$topics = $store->getTopicCollection($topicsInForum, $resolver);

$goodLooking->registerVar('topics', parseTopicCollection($topics));

$goodLooking->display();

?>