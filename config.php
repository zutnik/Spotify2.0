<?php
// Copy this file to config.local.php and set your credentials there.
// config.local.php is gitignored and never committed.

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'spotify');

function db_connect(): mysqli {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        http_response_code(500);
        die('Database connection failed.');
    }
    return $conn;
}
