<?php
// Define MySQL database connection parameters
$hostname = 'localhost';   // or your MySQL server IP address if different
$username = 'root';
$password = '';
$database = 'codeigniter_db';

// Attempt to connect to MySQL database
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check connection status
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Connection successful
echo 'Connected successfully!';

// Close MySQL connection
$mysqli->close();
?>
