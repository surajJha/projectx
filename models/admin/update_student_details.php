<?php
include '../database.php';
/* 
 * Updating student database changed by MODIFY Tab2
 */
session_start();
$databasename = $_SESSION["database_name"];
$db = $connection->$databasename;
$standard = 1; //$_POST["standard"];
$div = "A"; //$_POST["division"];

