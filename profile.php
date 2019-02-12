<?php


$access_token = 'wYMUKxKUEd8UU3ZknVLJXzxslvKee+sgac4r9NwO0soFPwtxbgC19ddumUbV2eo4mejaN+gQZSfuPfEsMgV5+7TuQTzJxdFg0qMc5NCg6EUYjZL4guGO0qeHn3gnAL9IMUbTP1tsYCDKnP7jxeXBzwdB04t89/1O/w1cDnyilFU=';

$userId = 'Udd96b477e25325779280235c668c1b86';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

