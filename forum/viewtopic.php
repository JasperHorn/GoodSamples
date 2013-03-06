<?php

require_once 'bootstrap.php';

$goodLooking = new \Good\Looking\Looking('viewtopic.template.html');

require 'sessionUser.php';

// This $forum bit can be made loads and loads better when
// the planned syntactic sugar is there
$topic = Topic::createDummy($_GET['id']);
$correctTopic = $store->createEqualityCondition($topic);
$resolver = Topic::resolver();
$resolver->resolveForum();
$topics = $store->getTopicCollection($correctTopic, $resolver);

if ($fullTopic = $topics->getNext())
{
	$goodLooking->registerVar('topic', parseTopic($fullTopic));
}

$post = new Post();
$post->setTopic($topic);
$postsInTopic = $store->createEqualityCondition($post);

$resolver = Post::resolver();
$resolver->resolvePoster();
$resolver->orderByTimePostedAsc();

$posts = $store->getPostCollection($postsInTopic, $resolver);

$goodLooking->registerVar('posts', parsePostCollection($posts));

$goodLooking->display();

?>