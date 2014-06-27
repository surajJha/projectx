<?php
include '../database.php';
header('Content-Type: application/json');
/*
 * Display of students for deletion of student in Student DELETE tab3
 */
session_start();
$databasename = "projectx";//$_SESSION["database_name"];
$db = $connection->$databasename;
$standard = 1; //$_POST["standard"];
$div = "A"; //$_POST["division"];

$display = $db->person->find(
        array("standard"=>$standard,"division"=>$div),
        array("_id"=>0,"roll_no"=>1,"name"=>1)
        );
$x=array();
foreach ($display as $index => $doc) {
    $x[$index]['roll_no']=$doc["roll_no"];
    $x[$index]['name']=$doc["name"]["first_name"]." ".$doc["name"]["last_name"];
}
echo json_encode($x);