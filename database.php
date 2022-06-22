<?php
//importiamo il database

define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME', 'university_db');
define('DB_PORT', 8889);

//connettiamo

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

//condizione dell'error

if ($conn && $conn->connect_error) {
    echo 'Connection Error';
    die();
}