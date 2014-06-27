<?php

include '../database.php';
include '../encryption.php';
include '../AutoIncrement.php';
session_start();
/* 
 * This php file is responding to the add_new_student button click function 
 * for adding new student in manage_student.js
 */
try{


$databasename = $_SESSION["database_name"];

$db = $connection->$databasename;

$a = new Mongodb_Autoincrement($db->person, $db, "counters");
$person = $db->person;
$n = $a->getNext();
//Adding Parent

$fatherfname = $_POST["father_first_name"];
$fatherlname = $_POST["father_last_name"];
$motherfname = $_POST["mother_first_name"];
$motherlname = $_POST["mother_last_name"];
$parent_contact = $_POST["parent_contact_no"];
$parent_password = $fatherfname.$n;
$parent_email= $_POST["parent_email"];
$encrypt_pass = password_encrypt($parent_password);

$parent_address = $_POST["parent_address"];
$parent = array(
		"_id"=> $n,
		"type"=> "parent",
		"father_name"=>array(
			"first_name"=> $fatherfname,
			"last_name"=> $fatherlname
		),
		"mother_name"=>array(
			"first_name"=> $motherfname,
			"last_name"=> $motherlname
		),
		"address"=> $parent_address,
		"email_id"=> $parent_email,
		"username"=> $fatherfname.$n,
		"password"=> $encrypt_pass,
		"contact_no"=> $parent_contact,
                );

	$person->insert($parent);

$std = 1;//$_POST["standard"];
$div = "A";//$_POST["division"];
$rno = $db->person->aggregate(
        array('$match'=>array("standard"=>$std,"division"=>$div)),
        //array('$sort'=>array("roll_no"=>1)),
        array('$group'=>array("_id"=>1,"roll_no"=>array('$last'=>'$roll_no'))) //Dont use "(double quotes) for property name to be accesses by $
        );


$parent_id = $n;
$n = $a->getNext();
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$address = $_POST["address"];
$email_id = $_POST["email_id"];
$contact = $_POST["contact_no"];
$dob = explode("-",$_POST["dob"]);
$day = $dob[2];
$month = $dob[1];
$year = $dob[0];
$date_of_birth = $day."/".$month."/".$year;

$stu_password = $fname.$n;
$encrypt_stu_password = password_encrypt($stu_password);
$p=array(
		"_id"=> $n,
		"type"=> "student",
		"name"=>array(
			"first_name"=> $fname,
			"last_name"=> $lname
		),
		"address"=> $address,
		"email_id"=> $email_id,
		"username"=> $fname.$n,
		"password"=> $encrypt_stu_password,
		"contact_no"=> $contact,
		"dob"=> $date_of_birth,
		"standard"=> $std,
		"division"=> $div,
                "roll_no"=> $rno["result"][0]["roll_no"]+1,
		"parent_id"=> $parent_id
	);
	$person->insert($p);
 
 
} catch (MongoConnectionException $e) {
  echo ('Error connecting to MongoDB server');
  
} catch (MongoException $e) {

  echo ('Error: ' . $e->getMessage()); // remove this afterwords during production

}
 echo "success";
