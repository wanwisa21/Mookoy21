<?php
$access_token = '9Mlwf3wWAeAcMO3xuRK46qtM9jBL68GrdUwgiJLYSOTpngaOWmcNV/of4SJmDhw+8CFfLmZy/XFS6698C62H6oLGl8IqF6m8iPCm638nkLTW2e+dgaeyh5SDMHB/orYYhUM8BRsYzV0xtj+Jo3QqGwdB04t89/1O/w1cDnyilFU=
';

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