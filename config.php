<?php
// Application configuration and database connection helper.

// $DB_HOST = 'localhost';
// $DB_USER = 'root';
// $DB_PASS = 'SuperSecret123!';
// $DB_NAME = 'appdb';


function db() {
    global $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME;
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if ($conn->connect_errno) {
        die('DB connection failed');
    }
    return $conn;
}
