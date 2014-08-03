<?php

require_once 'bootstrap.php';

session_start();

$now = new DateTime();

$post = new Post();
$post->setMessage($_POST['message']);
// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$t = new Topic();
$t->setId($_POST['topic']);
$post->setTopic($t);
// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$p = new MyUser();
$p->setId($_SESSION['userId']);
$post->setPoster($p);
$post->setTimePosted($now);

$storage->insert($post);

// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$topic = new Topic();
$topic->setId($_POST['topic']);
$correctTopic = new \Good\Manners\Condition\EqualTo($topic);
$topics = $storage->getCollection($correctTopic, Topic::resolver());

if ($fullTopic = $topics->getNext())
{
	$fullTopic->setTimeLastMessage($now);
}

$_GET['id'] = $_POST['topic'];
require 'viewtopic.php';

?>