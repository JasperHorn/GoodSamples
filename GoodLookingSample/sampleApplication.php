<?php
$logged_in = false;
$loginpage = true;
$name = 'Unknown';
$title = 'Sample application for GoodLooking';
$mainText = 'Welcome to the sample application for this GoodLooking, templating system
of the Good Suite. This application was made before the templating syste m actually 
existed. It served as goal for the system to move towards. It ended up changing quite
a bit when the choice was made to move the language closer to PHP, but it still stands
strong as a monument to the design of the system. And though I wouldn\'t consider this
to be a particularly good example of what Good Looking can do, it\'s still a working
demo.';

$newspapers[0][0]['name'] = "Save the world Today";
$newspapers[0][0]['date'] = "Today";
$newspapers[0][0]['time'] = "dunno";
$newspapers[0][0]['viewCount'] = 2;
$newspapers[0][0]['reviews'][0][0] = "http://someurl";
$newspapers[0][0]['reviews'][0][1] = "poo.svg";
$newspapers[0][0]['reviews'][0][2] = "Crappy, crappy, crappy";
$newspapers[0][0]['reviews'][1][0] = "http://someotherurl";
$newspapers[0][0]['reviews'][1][1] = "suppa!";
$newspapers[0][0]['reviews'][1][2] = "Best I have ever seen or heard!";
$newspapers[0][0]['price'] = 2;
$newspapers[0][0]['buy-now']['present'] = true;
$newspapers[0][0]['buy-now']['link'] = "404.html";
$newspapers[0][1]['name'] = "Screw you right back!";
$newspapers[0][1]['date'] = "Loooong ago";
$newspapers[0][1]['time'] = "you think I remember?";
$newspapers[0][1]['viewCount'] = 377;
$newspapers[0][1]['reviews'][0][0] = "http://unavailable";
$newspapers[0][1]['reviews'][0][1] = "dreamer.ext";
$newspapers[0][1]['reviews'][0][2] = "I only wish I could write like that";
$newspapers[0][1]['reviews'][1][0] = "http://1337site";
$newspapers[0][1]['reviews'][1][1] = "w00t.inc";
$newspapers[0][1]['reviews'][1][2] = "w00t!";
$newspapers[0][1]['price'] = 45;
$newspapers[0][1]['buy-now']['present'] = false;
$newspapers[1][0]['name'] = "We're all doomed";
$newspapers[1][0]['date'] = "Somewhere in 2003";
$newspapers[1][0]['time'] = "I don't even know the date...";
$newspapers[1][0]['viewCount'] = -3;
$newspapers[1][0]['reviews'][0][0] = "http://nourl";
$newspapers[1][0]['reviews'][0][1] = "fun.jpg";
$newspapers[1][0]['reviews'][0][2] = "Are you making fun of me??!";
$newspapers[1][0]['reviews'][1][0] = "ftp://reviewerssite";
$newspapers[1][0]['reviews'][1][1] = "wtf.gif";
$newspapers[1][0]['reviews'][1][2] = "What is this?";
$newspapers[1][0]['price'] = 0.5;
$newspapers[1][0]['buy-now']['present'] = true;
$newspapers[1][0]['buy-now']['link'] = "buy.php";
$newspapers[1][1]['name'] = "Fighting never ends";
$newspapers[1][1]['date'] = "Tomorrow";
$newspapers[1][1]['time'] = "I am not sure yet";
$newspapers[1][1]['viewCount'] = 3;
$newspapers[1][1]['reviews'][0][0] = "http://futuresite";
$newspapers[1][1]['reviews'][0][1] = "drWho.png";
$newspapers[1][1]['reviews'][0][2] = "It's time travel!";
$newspapers[1][1]['reviews'][1][0] = "http://sqlquery";
$newspapers[1][1]['reviews'][1][1] = "question_mark.bmp"; // you tell <i>me</i> how I came up with putting a bmp in there
$newspapers[1][1]['reviews'][1][2] = "How do you suppose I have read that article?";
$newspapers[1][1]['price'] = 0.0002;
$newspapers[1][1]['buy-now']['present'] = true;
$newspapers[1][1]['buy-now']['link'] = "buyout.asp";

$newspaperLinks[0] = "http://www.thetimes.com";
$newspaperLinks[1] = "http://www.guardianweekly.com";

$newspaperNames[0] = "The Times";
$newspaperNames[1] = "Guardian Weekly";

$ourFriendsCount = 3;

$insertFooter = true;
$footer = "fixedFooter";

?>