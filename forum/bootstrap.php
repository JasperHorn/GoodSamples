<?php

// This whole file shouldn't be needed by The Good Suite in the future.
// All of this bootstrapping should be done by the platform itself.
//
// (There might be some including of classes here, as the suclasses
//  of the DataType-based BaseClasses need to be included before one
//  of the calls in this file, but the plan is to have that fixed
//  and handled by the system itself as well.)

require 'settings.php';
include ($good_dir . 'autoload.php');

date_default_timezone_set($timezone);

$service = new \Good\Service\Service();
$storage = new \Good\Memory\SQLStorage(new \Good\Memory\Database\MySQL($dbname, $dbhost, $dbport, $dbuser, $dbpass, ''));

// include generated classes
require_once 'compiled/Forum.datatype.php';
require_once 'compiled/Topic.datatype.php';
require_once 'compiled/Post.datatype.php';
require_once 'compiled/User.datatype.php';
require_once 'compiled/ForumResolver.php';
require_once 'compiled/TopicResolver.php';
require_once 'compiled/PostResolver.php';
require_once 'compiled/UserResolver.php';

// ** register Storable subclasses here    ** //

require_once 'DataSubClasses/MyUser.php';
$storage->registerType('User', 'MyUser');

// ** end of included Storable subclasses **//


?>