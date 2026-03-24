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
    // Production Settings (Update these when hosting on InfinityFree/000webhost)
    define('DB_SERVER', 'your_production_host');     // e.g., sql301.infinityfree.com
    define('DB_USERNAME', 'your_production_user');   // e.g., if0_12345678
    define('DB_PASSWORD', 'your_production_password');
    define('DB_NAME', 'your_production_db_name');    // e.g., if0_12345678_customizedgift
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
