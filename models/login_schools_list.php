<?php
include './database.php';
header('Content-Type: application/json');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$school_list = $connection->masterdatabase->schooldatabase->find();
$x = array();
foreach($school_list as $doc){
    array_push($x, $doc["school_name"]);
    
}
echo json_encode($x);