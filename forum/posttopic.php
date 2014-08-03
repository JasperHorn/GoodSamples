<?php

require_once 'bootstrap.php';

session_start();

$now = new DateTime();

$topic = new Topic();
$topic->setTitle($_POST['title']);
// NOTE: setId(), clean(), setNew() are not public API! Should be changed when a 
// proper replacement for this is added to the public API
$f = new Forum();
$f->setId($_POST['forum']);
$f->clean();
$f->setNew(false);
$topic->setForum($f);
// NOTE: setId(), clean(), setNew() are not public API! Should be changed when a 
// proper replacement for this is added to the public API
$u = new MyUser();
$u->setId($_SESSION['userId']);
$u->clean();
$u->setNew(false);
$topic->setTopicStarter($u);
$topic->setTimeLastMessage($now);

$post = new Post();
$post->setMessage($_POST['message']);
// NOTE: setId(), clean(), setNew() are not public API! Should be changed when a 
// proper replacement for this is added to the public API
$u = new MyUser();
$u->setId($_SESSION['userId']);
$u->clean();
$u->setNew(false);
$post->setPoster($u);
$post->setTopic($topic);
$post->setTimePosted($now);

$storage->insert($post);

// this should be made unnecessary
$storage->flush();

$_GET['id'] = $topic->getId();
require 'viewtopic.php';

?>