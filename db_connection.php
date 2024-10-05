<?php
$host = 'localhost';  // This is usually 'localhost' for phpMyAdmin
$user = 'root';  // Your phpMyAdmin username
$password = '';  // Your phpMyAdmin password
$dbname = 'ojep_db';  // The database name you created or are using

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch carousel data
$sql = "SELECT name, presentation, logo FROM pub";
$result = $conn->query($sql);

// Prepare an array to store the fetched data
$pubs = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pubs[] = $row;
    }
} else {
    echo "No data found.";
}

// Fetch the 3 most recent news
$sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT 4";
$result1 = $conn->query($sql);

$news = array();

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $news[] = $row;
    }
} else {
    echo "No data found.";
}

// Do not close the connection here
// The connection will be closed after running queries in the relevant files
?>
