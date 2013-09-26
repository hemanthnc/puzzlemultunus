<?php
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "github";
$notweets = 30;
$consumerkey = "KW8KOdCnwOe9GEDiClTQJA";
$consumersecret = "cudPI25FPwFofBt0EGTTVEktQTTDiNbFf1eXjaN9I";
$accesstoken = "1889993708-mqFxLwqxmAhEjzcGGSDcP7wpahTUmukWL6HKRm0";
$accesstokensecret = "ulsZBRaCDT4tMyFlvrRIcjYPEC5OHfQQ5HOrvanx0TM";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$profile = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($profile);
?>
