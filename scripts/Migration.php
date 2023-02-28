<?php

use Symfony\Component\Validator\Constraints\Length;

$servername = "localhost";
$username = "root";
$password = "";
$database = "old";
$databaseOfficial = "db_name";


// Create connection
$conn = new \mysqli($servername, $username, $password, $database);

// Create connection to main database
$connMain = new \mysqli($servername, $username, $password, $databaseOfficial);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($connMain->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";

$sql = "SELECT * FROM lockups";
$result = $conn->query($sql);







foreach ($result as $item) {

  $tempFields = [];
$lockup = [];
$feedbacks = [];

  if ($item['style'] == "org_recognized_student" || ($item['style'] == "org_recognized_student_2_1")) {
    $tempFields['9'] = $item['organization'];
  } else if ($item['organization'] != null) {
    $tempFields['1'] = $item['organization'];
  }

  if ($item['subject'] != null) {
    $tempFields['3'] = $item['subject'];
  }

  if ($item['style'] == "org_recognized_student_2_1") {
    $tempFields['10'] = $item['organization_second_line'];
  } else if ($item['organization_second_line'] != null) {
    $tempFields['2'] = $item['organization_second_line'];
  }

  if ($item['subject_second_line'] != null) {
    $tempFields['4'] = $item['subject_second_line'];
  }

  if ($item['acronym'] != null) {
    $tempFields['5'] = $item['acronym'];
  }

  if ($item['acronym_subject'] != null) {
    $tempFields['7'] = $item['acronym_subject'];
  }

  if ($item['acronym_second_line'] != null) {
    $tempFields['6'] = $item['acronym_second_line'];
  }

  if ($item['extension_county'] != null) {
    $tempFields['8'] = $item['extension_county'];
  }

  switch ($item['style']) {
    case "org_only":
      $lockup['template_id'] = 1;
      break;

    case "acronym_social":
      $lockup['template_id'] = 29;
      break;

    case "org_subject":
      $lockup['template_id'] = 3;
      break;

    case "org_two_line":
      $lockup['template_id'] = 2;
      break;

    case "acronym":
      $lockup['template_id'] = 10;
      break;

    case "org_subject_1_2":
      $lockup['template_id'] = 5;
      break;

    case "org_subject_2_1":
      $lockup['template_id'] = 6;
      break;

    case "extension":
      $lockup['template_id'] = 13;
      break;

    case "org_subject_2_2":
      $lockup['template_id'] = 7;
      break;

    case "extension_4h":
      $lockup['template_id'] = 27;
      break;

    case "org_recognized_student":
      $lockup['template_id'] = 8;
      break;

    case "org_recognized_student_2_1":
      $lockup['template_id'] = 9;
      break;


    case "acronym_subject":
      $lockup['template_id'] = 11;
      break;


    case "acronym_subject_2_1":
      $lockup['template_id'] = 24;
      break;

    case "ncta":
      $lockup['template_id'] = 25;
      break;
  }

  switch ($item['creative_status']) {
    case "approved":
      $lockup['creative_status'] = 1;
      break;
    
    case "generated":
      $lockup['creative_status'] = 1;
      break;

    case "denied":
      $lockup['creative_status'] = 2;
      break;

    default:
      $lockup['creative_status'] = 0;
      break;
  }

  switch ($item['status']) {
    case "approved":
      $lockup['communicator_status'] = 1;
      break;

    case "generated":
      $lockup['communicator_status'] = 1;
      break;

    case "denied":
      $lockup['communicator_status'] = 2;
      break;

    default:
      $lockup['communicator_status'] = 0;
      break;
  }


  $lockup['date_created'] = $item['date_created'];

  if ($item['user_id'] == 8) {
    $lockup['user_id'] = (int)15;
  } else {
  $lockup['user_id'] = (int)$item['user_id'];
  }

  if ($item['published'] == null) {
    $lockup['public'] = (int)1;
  } else {
    $lockup['public'] = (int)$item['published'];
  }


  if ($item['file_organization'] == null) {
    $lockup['organization'] = null;
  } else {
    $lockup['organization'] = (string)$item['file_organization'];
  }

  if ($item['approver_id'] == null) {
    $lockup['approver_id'] = null;
  } else {
    $lockup['approver_id'] = (int)$item['approver_id'];
  }


  if ($item['creative_feedback'] != null) {
    $tempFeedback = [];
    if ($lockup['approver_id'] == null) {
      $tempFeedback['user_id'] = (int)15;
    } else {
      $tempFeedback['user_id'] = $lockup['approver_id'];
    }
    $tempFeedback['value'] = $item['creative_feedback'];
    $tempFeedback['type'] = "approver";
    $tempFeedback['time'] = date("Y-m-d H:i:s");
    array_push($feedbacks, $tempFeedback);
  }

  if ($item['communicator_feedback'] != null) {
    $tempFeedback = [];
    $tempFeedback['user_id'] = (int)15;
    $tempFeedback['value'] = $item['creative_feedback'];
    $tempFeedback['type'] = "creative";
    $tempFeedback['time'] = date("Y-m-d H:i:s");
    array_push($feedbacks, $tempFeedback);
  }

  foreach ($tempFields as $fields) {
    $lockup['department'] = $fields;
    break;
  }

  $lockup['institution'] = $item['file_organization_acronym']; // add change to NULL if empty


  foreach ($lockup as $key => $tempvalue) {
    if ($lockup[$key] != null) {
      if (str_contains($lockup[$key], "'")) {
        $lockup[$key] = str_replace("'", "\'", $lockup[$key]);

      }
    }
  }

  foreach ($feedbacks as $primarykey => $valueItem) {
  foreach ($feedbacks[$primarykey] as $key => $tempvalue) {
    if ($feedbacks[$primarykey][$key] != null) {
      if (str_contains($feedbacks[$primarykey][$key], "'")) {
        $feedbacks[$primarykey][$key] = str_replace("'", "\'", $feedbacks[$primarykey][$key]);

      }
    }
  }
  }

  foreach ($tempFields as $key => $tempvalue) {
    if ($tempFields[$key] != null) {
      if (str_contains($tempFields[$key], "'")) {
        $tempFields[$key] = str_replace("'", "\'", $tempFields[$key]);

      }
    }
  }

  // echo (var_dump($lockup));
  // echo (var_dump($tempFields));
  // echo (var_dump($feedbacks));
  if ($lockup['approver_id'] == null) {
    $query = "INSERT INTO `lockups` (`template_id`, `status`, `user_id`, `institution`, `name`, `generating`, `is_generated`, `creative_status`,  `communicator_status`, `public`, `approver_id`, `organization`, `date_created`) VALUES ('" . $lockup['template_id'] . "', '0', '" . $lockup['user_id'] . "', '" . $lockup['institution'] . "', '" . $lockup['department'] . "', '0', '0', '" . $lockup['creative_status'] . "', '" . $lockup['communicator_status'] . "', '" . $lockup['public'] . "', NULL, '" . $lockup['organization'] . "', '" . $lockup['date_created'] . "');";

  } else {
    $query = "INSERT INTO `lockups` (`template_id`, `status`, `user_id`, `institution`, `name`, `generating`, `is_generated`, `creative_status`,  `communicator_status`, `public`, `approver_id`, `organization`, `date_created`) VALUES ('" . $lockup['template_id'] . "', '0', '" . $lockup['user_id'] . "', '" . $lockup['institution'] . "', '" . $lockup['department'] . "', '0', '0', '" . $lockup['creative_status'] . "', '" . $lockup['communicator_status'] . "', '" . $lockup['public'] . "', '" . $lockup['approver_id'] . "', '" . $lockup['organization'] . "', '" . $lockup['date_created'] . "');";

  }

  // echo ($query);
  $res = $connMain->query($query);


  if (!$res) {

    echo "failed to execute query: $query\n";
  } else {
    echo "Query: executed\n";
    $lockupsId = $connMain->insert_id;
    echo($lockupsId);
  }

  foreach ($tempFields as $key => $value) {
    $query = "INSERT INTO `lockups_fields` (`lockup_id`, `fields_id`, `value`) VALUES ('" . $lockupsId . "', '" . $key . "', '" . $value . "');";
    // echo ($query);
    $res = $connMain->query($query);

  }

  foreach ($feedbacks as $value) {
    $query = "INSERT INTO `feedbacks` (`lockup_id`, `user_id`, `value`, `type`) VALUES ('" . $lockupsId . "', '" . $value['user_id'] . "', '" . $value['value'] . "', '" . $value['type'] . "');";
    // echo ($query);
    $res = $connMain->query($query);

  }



  if (is_object($res)) {

    $res->close();
  }
}

 // not needed
// $temp = [];
// foreach ($result as $item) {
//   if (!in_array($item['status'], $temp)) {
//     array_push($temp, $item['status']);
//   }
// }

// echo(var_dump($temp));
