<?php

// Get all the IDs in 'lockups'
// Generate preview for each one

// TO DO THIS YOU NEED TO NEED TO REMOVE OR COMMENT '$auth->requireAuth();'
// FROM generateLockups AND generatePreviewLockups IN /sec/controller/LockupsController.php

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
    echo $lockup['id'] . PHP_EOL;
    $response = "";

    if ($lockup['creative_status'] === '1' && $lockup['communicator_status'] === '1' && $lockup['is_generated'] === '0') {
        echo "Generating Lockup Files" . PHP_EOL;
        $response = file_get_contents($lockupsURL . "/lockups/generate/" . $lockup['id']);
    } elseif (
        ($lockup['creative_status'] !== '1' || $lockup['communicator_status'] !== '1')
        && $lockup['is_generated'] === '0' && !isset($lockup['preview_v'])
    ) {
        echo "Generating Preview" . PHP_EOL;
        $response = file_get_contents($lockupsURL . "/lockups/generate/preview/" . $lockup['id']);
    }
    
    // If we get an error generating one then we will output it in this file
    if ($response === false) {
        echo "ERROR WITH GENERATION" . PHP_EOL;
        file_put_contents(dirname(__FILE__) . '/Regeneration.txt', $lockup['id'] . PHP_EOL, FILE_APPEND);
        continue;
    }
    echo PHP_EOL;
}
