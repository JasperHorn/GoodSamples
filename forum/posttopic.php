<?php

require_once 'bootstrap.php';

session_start();

$now = new DateTime();

$topic = new Topic();
$topic->setTitle($_POST['title']);
// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$f = new Forum();
$f->setId($_POST['forum']);
$topic->setForum($f);
// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$u = new MyUser();
$u->setId($_SESSION['userId']);
$topic->setTopicStarter($u);
$topic->setTimeLastMessage($now);

$post = new Post();
$post->setMessage($_POST['message']);
// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$u = new MyUser();
$u->setId($_SESSION['userId']);
$post->setPoster($u);
$post->setTopic($topic);
$post->setTimePosted($now);

$storage->insert($post);

// this should be made unnecessary
$storage->flush();

$_GET['id'] = $topic->getId();
require 'viewtopic.php';

?>