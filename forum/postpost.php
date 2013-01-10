<?php

require_once 'bootstrap.php';

session_start();

$now = new DateTime();

$post = new Post();
$post->setMessage($_POST['message']);
$post->setTopic(Topic::createDummy($_POST['topic']));
$post->setPoster(User::createDummy($_SESSION['userId']));
$post->setTimePosted($now);

$store->insertPost($post);

// This $topic bit can be made loads and loads better when
// the planned syntactic sugar is there
$topic = Topic::createDummy($_POST['topic']);
$correctTopic = $store->createEqualityCondition($topic);
$topics = $store->getTopicCollection($correctTopic, Topic::resolver());

if ($fullTopic = $topics->getNext())
{
	$fullTopic->setTimeLastMessage($now);
}

$_GET['id'] = $_POST['topic'];
require 'viewtopic.php';

?>