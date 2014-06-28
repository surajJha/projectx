<?php

include '../database.php';
header('Content-Type: application/json');
/*
 * For updating the details of studennt in Student UPDATE form
 * in update tabbed content
 */
session_start();
$databasename = $_SESSION["database_name"];
$db = $connection->$databasename;
$standard = 1; //$_POST["standard"];
$div = "A"; //$_POST["division"];

$select_stu = $_GET["select_student"];
$student = $_GET["student_info"];
if ($select_stu == "Name") {
    $name = explode(" ", $student);
    $fname = $name[0];
    $lname = $name[1];
    $stu = $db->person->findOne(
            array("standard" => $standard, "division" => $div, "name.first_name" => $fname, "name.last_name" => $lname), array("_id" => 1, "name" => 1, "roll_no" => 1, "address" => 1, "dob" => 1, "roll_no" => 1, "contact_no" => 1, "email_id" => 1, "parent_id" => 1)
    );
    $_SESSION["update_student_id"]=$stu["_id"];
    $_SESSION["update_student_parent_id"]=$stu["parent_id"];
    $parent = $db->person->findOne(array("_id" => $stu["parent_id"]));
    $x = array();
    $x[0] = $stu["name"]["first_name"];
    $x[1] = $stu["name"]["last_name"];
    $x[2] = $stu["roll_no"];
    $x[3] = $stu["address"];
    $x[4] = $stu["dob"];
    $x[5] = $stu["email_id"];
    $x[6] = $stu["contact_no"];
    $x[7] = $parent["father_name"]["first_name"];
    $x[8] = $parent["father_name"]["last_name"];
    $x[9] = $parent["mother_name"]["first_name"];
    $x[10] = $parent["mother_name"]["last_name"];
    $x[11] = $parent["address"];
    $x[12] = $parent["email_id"];
    $x[13] = $parent["contact_no"];
    echo json_encode($x);
} elseif ($select_stu == "Roll Number") {
    $rollno = intval($student);
    $stu = $db->person->findOne(
            array("standard" => $standard, "division" => $div, "roll_no" => $rollno), array("_id" => 0, "name" => 1, "roll_no" => 1, "address" => 1, "dob" => 1, "roll_no" => 1, "contact_no" => 1, "email_id" => 1, "parent_id" => 1)
    );
    
    $parent = $db->person->findOne(array("_id" => $stu["parent_id"]));
    
    $x = array();
    $x[0] = $stu["name"]["first_name"];
    $x[1] = $stu["name"]["last_name"];
    $x[2] = $stu["roll_no"];
    $x[3] = $stu["address"];
    $x[4] = $stu["dob"];
    $x[5] = $stu["email_id"];
    $x[6] = $stu["contact_no"];
    $x[7] = $parent["father_name"]["first_name"];
    $x[8] = $parent["father_name"]["last_name"];
    $x[9] = $parent["mother_name"]["first_name"];
    $x[10] = $parent["mother_name"]["last_name"];
    $x[11] = $parent["address"];
    $x[12] = $parent["email_id"];
    $x[13] = $parent["contact_no"];
    echo json_encode($x);
}
//with roll_no

