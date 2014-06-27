<?php
include '../database.php';
header('Content-Type: application/json');
/*
 * Deleting students from the list displayed in Student DELETE tab3
 */
session_start();
$databasename = $_SESSION["database_name"];
$db = $connection->$databasename;
$standard = 1; //$_POST["standard"];
$div = "A"; //$_POST["division"];

$roll = array();
for($i=0;$i<sizeof($_POST["delete_student_checkbox"]);$i++){
    $roll[$i] = intval($_POST["delete_student_checkbox"][$i]);
}

$find_stu_to_delete = $db->person->find(
        array("standard"=>$standard,"division"=>$div,"roll_no"=>array('$in'=>$roll))
        );

$parent_id = array();
$id = array();
$k=0;
foreach ($find_stu_to_delete as $doc) {
    $parent_id[$k]=$doc["parent_id"];
    $id[$k++]=$doc["_id"];
}


$delete_stu_doc = $db->person->remove(array("_id"=>array('$in'=>$id)));



$check_parent = $db->person->find(
        array("parent_id"=>array('$in'=>$parent_id)),
        array("_id"=>0,"parent_id"=>1)
        );
$delete_parent_id = array();
$k=0;
$check_parent_id = array();
foreach ($check_parent_id as $doc) {
    $check_parent_id[$k++]=$doc["parent_id"];
}
$k=0;
for($i=0;$i<sizeof($parent_id);$i++){
    if(!in_array($parent_id[$i], $check_parent_id)){
        $delete_parent_id[$k++]=$parent_id[$i];
    }
}


$delete_parent = $db->person->remove(array("_id"=>array('$in'=>$delete_parent_id)));
echo "suraj";



