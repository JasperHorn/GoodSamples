<?php

require_once 'bootstrap.php';

$goodLooking = new \Good\Looking\Looking('viewtopic.template.html');

require 'sessionUser.php';

// NOTE: setId() is not public API! Should be changed when a proper replacement 
// for this is added to the public API
$topic = new Topic();
$topic->setId($_GET['id']);
$correctTopic = new \Good\Manners\Condition\EqualTo($topic);
$resolver = Topic::resolver();
$resolver->resolveForum();
$topics = $storage->getCollection($correctTopic, $resolver);

if ($fullTopic = $topics->getNext())
{
	$goodLooking->registerVar('topic', $fullTopic);
}

$post = new Post();
$post->setTopic($topic);
$postsInTopic = new \Good\Manners\Condition\EqualTo($post);

$resolver = Post::resolver();
$resolver->resolvePoster();
$resolver->orderByTimePostedAsc();

$posts = $storage->getCollection($postsInTopic, $resolver);

$goodLooking->registerVar('posts', $posts);

$goodLooking->display();

?>