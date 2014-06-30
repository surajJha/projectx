
<?php
include '../database.php';
/* 
 * Updating student database changed by MODIFY Tab2
 */
session_start();
$databasename = $_SESSION["database_name"];
$db = $connection->$databasename;
$standard = 1; //$_POST["standard"];
$div = "B"; //$_POST["division"];
//student details
$first_name = $_POST["update_first_name"];
$last_name = $_POST["update_last_name"];
$roll_no = $_POST["update_roll_no"];
$address = $_POST["update_address"];
$dob = $_POST["update_dob"];
$email_id = $_POST["update_email_id"];
$contact_no = $_POST["update_no"];
//echo json_encode($_POST);
$update_stu = $db->person->update(
        array("_id"=>$_SESSION["update_student_id"]),
        array('$set'=>array(
            "name"=>array(
			"first_name"=> $first_name,
			"last_name"=> $last_name
		),
		"address"=> $address,
		"email_id"=> $email_id,
		"contact_no"=> $contact_no,
		"dob"=> $dob,
		"standard"=> $standard,
		"division"=> $div,
                "roll_no"=> $roll_no,
		"parent_id"=> $_SESSION["update_student_parent_id"]
                )
            )
        );
//parent details
$fatherfname = $_POST["father_first_name"];
$fatherlname = $_POST["father_last_name"];
$motherfname = $_POST["mother_first_name"];
$motherlname = $_POST["mother_last_name"];
$parent_address = $_POST["update_parent_address"];
$parent_email = $_POST["update_parent_email"];
$parent_contact = $_POST["update_parent_contact_no"];

$update_parent = $db->person->update(
        array("_id"=> $_SESSION["update_student_parent_id"]),
        array('$set'=>array(
		
		"father_name"=>array(
			"first_name"=> $fatherfname,
			"last_name"=> $fatherlname
		),
		"mother_name"=>array(
			"first_name"=> $motherfname,
			"last_name"=> $motherlname
		),
		//"students"=> 
		"address"=> $parent_address,
		"email_id"=> $parent_email,

		"contact_no"=> $parent_contact,
		)
            )
        );
echo "success";