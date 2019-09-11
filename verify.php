<?php
$access_token = 'NHtmYtJsUVAvNMmNdfEDYsJIf6VZ9pte4tHb9isBNjZdjK3gcslipEfkvrDI1d//i+BcyVpnYo5o+5jnJnRHD9U4KgM4T5Xt2JIeua7N+aLuNkG07euhi0r14I1mKRFWLQ0cgTWPVMEu0pWkEUH9sAdB04t89/1O/w1cDnyilFU=
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
