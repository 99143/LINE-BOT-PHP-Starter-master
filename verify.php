<?php
$proxy = 'http://fixie:CCbrkV9qQVdAMuy@velodrome.usefixie.com:80';
$proxyauth = 'username:password';
$access_token = 'AISYz0a6PRgbuW9MdaTOuhrM6UmQFcJu+BCr+8YtFL+toxtNmT3X2n25LYqVMBVhlLSIx45sZRlXDVnTfJ7Kk53Dvojdgf1IX5NNJAmkmEOcsc7+hfMvYyeRE5lTIwjo0P3sRMfn3tygW6xvVt6U3AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
