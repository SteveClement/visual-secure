<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved. 
// 
// Application: Gimme graphs
// File: 'index.php' 
//   This is a sample skeleton for your application. 
// 

require_once 'facebook.php';

$appapikey = '321b8c0096dbe3545fe4fc0641acbeed';
$appsecret = '1303b424fe0ef2a24343caac19b31f61';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
$friends = $facebook->api_client->friends_get();
//$friends = array_slice($friends, 0, 50);
foreach ($friends as $friend) {
  echo "<br>$friend";
}
echo "</p>";
