<?php
// Serve a document from the shared files directory.
$file = $_GET['file'] ?? 'welcome.txt';

$path = '/var/www/files/' . $file;
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
readfile($path);
