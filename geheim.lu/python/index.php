<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: Gimme graphs
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 

require_once 'facebook-old.php';

$appapikey = '79325e358ca7434aad05f0ff96c30727';
$appsecret = 'a5d2ac426f77cb419d08e7fd03656581';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();
$count = 0;

// Greet the currently logged-in user!
echo "<p>Hello stranger ;)  <fb:name uid=\"$user_id\" useyou=\"false\" /></p>";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends by ID:";
$friends = $facebook->api_client->friends_get();
//$friends = array_slice($friends, 0, 50);
foreach ($friends as $friend) {
  $count = $count + 1;
  echo "<br>$friend";
}
echo "<br><br>Oh wow you have $count friends. Respect!";
echo "</p>";
