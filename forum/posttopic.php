<?php

require_once 'bootstrap.php';

session_start();

$now = new DateTime();

$topic = new Topic();
$topic->setTitle($_POST['title']);
$topic->setForum(Forum::createDummy($_POST['forum']));
$topic->setTopicStarter(User::createDummy($_SESSION['userId']));
$topic->setTimeLastMessage($now);

$post = new Post();
$post->setMessage($_POST['message']);
$post->setPoster(User::createDummy($_SESSION['userId']));
$post->setTopic($topic);
$post->setTimePosted($now);

$store->insertPost($post);

// this should be made unnecessary
$store->flush();

$_GET['id'] = $topic->getId();
require 'viewtopic.php';

?>