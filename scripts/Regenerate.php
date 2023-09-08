<?php

// Get all the IDs in 'lockups'
// Generate preview for each one

$servername = "localhost";
$username = "root";
$password = "";
$database = "lockups";

$lockupsURL = "http://local-lockups.unl.edu:8000";

// Create connection
$conn = new \mysqli($servername, $username, $password, $database);

// Check connection
if (isset($conn->connect_error)) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($connMain->connect_error)) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";

// Get all the lockups because they all should have previews
$sql = "SELECT * FROM lockups";
$result = $conn->query($sql);

// Loop through each one and generate the preview
foreach( $result as $lockup) {
    var_dump($lockup['id']);
    $response = file_get_contents($lockupsURL . "/lockups/generate/preview/" . $lockup['id']);

    // If we get an error generating one then we will output it in this file
    if ($response === false) {
        file_put_contents(dirname(__FILE__) . '/Regeneration.txt', $lockup['id'] . PHP_EOL, FILE_APPEND);
        continue;
    }
}
