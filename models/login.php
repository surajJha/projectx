<?php
include './database.php';
include './encryption.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 *  this file will handle the login functionality of the Home page
 *  i.e Index.php
 */


$schooldb = $_POST["school"];
$username = $_POST["user"];
$password = $_POST["password"];
//var_dump($_POST);
$schoolconn = $connection->masterdatabase->schooldatabase;
$school = $schoolconn->findOne(array(
    "school_name"=>$schooldb),
    array("database_name"=>1)
    );
$databasename = $school["database_name"];



$db = $connection->$databasename;

$login = $db->person;
$check = $login->findOne(array(
    "username"=>$username
    ),
    array("_id"=>0,"password"=>1,"type"=>1)
);

if(password_check($password, $check["password"])){
$user = $check;
session_start();
$_SESSION["database_name"]=$databasename;
$_SESSION["user_name"]=$username;
$_SESSION["user_type"]=$user["type"];

//header("Location: http://localhost/projectx/views/admin/".$_SESSION["user_type"]."_dashboard.php"); 
echo "http://localhost/projectx/views/admin/".$_SESSION["user_type"]."_dashboard.php";/* Redirect browser */
exit();
}
else{
    echo "e";
    //header("Location: http://localhost/projectx/index.php");
}
