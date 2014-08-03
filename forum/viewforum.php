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
	$goodLooking->registerVar('forum', $fullForum);
    
    // NOTE: hack because of lacking API
    // should be removed when id becomes available as property
    $goodLooking->registerVar('forumId', $fullForum->getId());
}

$topic = new Topic();
$topic->setForum($forum);
$topicsInForum = new \Good\Manners\Condition\EqualTo($topic);

$resolver = Topic::resolver();
$resolver->resolveTopicStarter();
$resolver->orderByTimeLastMessageDesc();

$topics = $storage->getCollection($topicsInForum, $resolver);

// NOTE: hack because of lacking API
// should be removed when id becomes available as property
// NOTE: hack because of lacking API
// should be removed when time parsing can be handled inside GoodLooking
$fixedTopics = array();
while ($topic = $topics->getNext())
{
    $fixedTopics[] = array($topic->getId(), $topic, $topic->timeLastMessage->format("Y-m-d H:i:s"));
}

$goodLooking->registerVar('topics', $fixedTopics);

$goodLooking->display();

?>