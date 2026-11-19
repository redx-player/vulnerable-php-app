<?php
// Network diagnostics: ping a host from the server.
$host = $_GET['host'] ?? '127.0.0.1';

echo '<pre>';
echo shell_exec('ping -c 2 ' . $host);
echo '</pre>';
