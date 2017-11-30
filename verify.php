
<?php
$access_token = 'h5g02Kqv4dto1ZPgYqoKu5yqBfy4yzfJ1aFSS886wZ33aqP3HKy/+4aEs5DHjcaQDOVZ2ZR57mohpRHEMUTJHLV1pxb/HYOVD0ZYFFLflLObr6NhHIllR1rS54FTJTgtAFQaa9vy9NJX6lekXdxg/QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>