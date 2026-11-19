<?php
// Link preview: fetch a remote URL and return its contents.
$url = $_GET['url'] ?? '';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$body = curl_exec($ch);
curl_close($ch);

header('Content-Type: text/plain');
echo $body;
