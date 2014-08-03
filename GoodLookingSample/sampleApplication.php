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

$now = new DateTime();
$tomorrow = $now->add(new DateInterval("P1D"));

$newspapers[0][0]['name'] = "Save the world Today";
$newspapers[0][0]['date'] = $now->format('Y-m-d');
$newspapers[0][0]['time'] = $now->format('H:m');
$newspapers[0][0]['viewCount'] = 2;
$newspapers[0][0]['reviews'][0][0] = "http://example.org";
$newspapers[0][0]['reviews'][0][1] = "review1.png";
$newspapers[0][0]['reviews'][0][2] = "Not quite what I was hoping for";
$newspapers[0][0]['reviews'][1][0] = "http://example.com";
$newspapers[0][0]['reviews'][1][1] = "review2.png";
$newspapers[0][0]['reviews'][1][2] = "Best I have ever seen or heard!";
$newspapers[0][0]['price'] = 2;
$newspapers[0][0]['buy-now']['present'] = true;
$newspapers[0][0]['buy-now']['link'] = "404.html";
$newspapers[0][1]['name'] = "The World, by Jack";
$newspapers[0][1]['date'] = "2001-04-07";
$newspapers[0][1]['time'] = "12:12";
$newspapers[0][1]['viewCount'] = 377;
$newspapers[0][1]['reviews'][0][0] = "http://www.piday.org/million/";
$newspapers[0][1]['reviews'][0][1] = "pi.png";
$newspapers[0][1]['reviews'][0][2] = "If only I could write like that";
$newspapers[0][1]['reviews'][1][0] = "http://google.com";
$newspapers[0][1]['reviews'][1][1] = "x.png";
$newspapers[0][1]['reviews'][1][2] = "Better than... candy";
$newspapers[0][1]['price'] = 42;
$newspapers[0][1]['buy-now']['present'] = false;
$newspapers[1][0]['name'] = "We're all doomed";
$newspapers[1][0]['date'] = "2003-12-31";
$newspapers[1][0]['time'] = "23:59";
$newspapers[1][0]['viewCount'] = -3;
$newspapers[1][0]['reviews'][0][0] = "http://localhost:8080";
$newspapers[1][0]['reviews'][0][1] = "grin.jpg";
$newspapers[1][0]['reviews'][0][2] = "This can't be taken seriously";
$newspapers[1][0]['reviews'][1][0] = "http://google.com/?q=review";
$newspapers[1][0]['reviews'][1][1] = "question_mark.gif";
$newspapers[1][0]['reviews'][1][2] = "What is this?";
$newspapers[1][0]['price'] = 0.5;
$newspapers[1][0]['buy-now']['present'] = true;
$newspapers[1][0]['buy-now']['link'] = "buy.php";
$newspapers[1][1]['name'] = "The world won't stop turning";
$newspapers[1][1]['date'] = $tomorrow->format('Y-m-d');
$newspapers[1][1]['time'] = $tomorrow->format('H:m');
$newspapers[1][1]['viewCount'] = 3;
$newspapers[1][1]['reviews'][0][0] = "http://en.wikipedia.org/wiki/The_Future_Is_Now";
$newspapers[1][1]['reviews'][0][1] = "tardis.png";
$newspapers[1][1]['reviews'][0][2] = "It's time travel!";
$newspapers[1][1]['reviews'][1][0] = "http://timeparadox.com/";
$newspapers[1][1]['reviews'][1][1] = "interrobang.png";
$newspapers[1][1]['reviews'][1][2] = "I travelled to the future and this article was the most interesting thign I could find to write about...";
$newspapers[1][1]['price'] = 0.0002;
$newspapers[1][1]['buy-now']['present'] = true;
$newspapers[1][1]['buy-now']['link'] = "http://www.amazon.co.uk";

$newspaperLinks[0] = "http://www.thetimes.com";
$newspaperLinks[1] = "http://www.guardianweekly.com";

$newspaperNames[0] = "The Times";
$newspaperNames[1] = "Guardian Weekly";

$ourFriendsCount = 3;

$insertFooter = true;
$footer = "fixedFooter";

?>