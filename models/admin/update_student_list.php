<?php
include '../database.php';
header('Content-Type: application/json');
/* 
 * This php is for filling the drop down menu for name or Roll no. as user 
 * Selects Name or Roll_no in Update Student Form.
 */
session_start();
$databasename = $_SESSION["database_name"];
$db = $connection->$databasename;
$standard = 1; //$_POST["standard"];
$div = "A"; //$_POST["division"];
$update_select = $_GET["select_student"];

if ($update_select == "Name") {

    $name = $db->person->find(
            /* array('$match'=> */array("standard" => $standard, "division" => $div), //),
            /* array('$project'=> */ array("_id" => 0, "name" => 1)//)
    );

    $names = array();
    $i = 0;
    foreach ($name as $doc) {
        $names[$i++] = $doc["name"]["first_name"] . " " . $doc["name"]["last_name"];
    }
    echo json_encode($names);
} elseif ($update_select == "Roll Number") {

    $name = $db->person->find(
            /* array('$match'=> */array("standard" => $standard, "division" => $div), //),
            /* array('$project'=> */ array("_id" => 0, "roll_no" => 1)//)
    );

    $roll = array();
    $i = 0;
    foreach ($name as $doc) {
        $roll[$i++] = $doc["roll_no"];
    }
    echo json_encode($roll);
}
