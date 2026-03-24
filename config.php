<?php
/**
 * Giftly - Centralized Configuration File
 * This file handles database connections for both local development and production hosting.
 */

// Determine if we are on localhost or a production server
$is_localhost = ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1');

if ($is_localhost) {
    // Local Development Settings (XAMPP Default)
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'customizedgift');
} else {
    // Production Settings (InfinityFree)
    define('DB_SERVER', 'sql213.infinityfree.com');
    define('DB_USERNAME', 'if0_41464724');
    define('DB_PASSWORD', 'Your_vPanel_Password_Here'); // Replace with your actual password!
    define('DB_NAME', 'if0_41464724_giftly');
}

/**
 * Returns a database connection using the defined constants.
 * @return mysqli
 */
function get_db_connection() {
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        // In production, we might want to log this instead of showing it to the user
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
?>
