<?php
include '../database.php';
header('Content-Type: application/json');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$databasename="projectx";//$_SESSION["database_name"];
$username = "suraj69";//$_SESSION["user_name"];
$usertype = "admin";//$_SESSION["user_type"];

$db = $connection->$databasename;

$std = $db->person->distinct("standard");
$y = array();
$x = array();


$i = 0;
$k=0;
foreach ($std as $standard) {
    $x['standard']=$std[$k];
    $class_divisions = $db->person->distinct("division",
            array("standard"=>$standard)
            );
    $x['no_of_divisions']=  sizeof($class_divisions);
    for($j=0;$j<sizeof($class_divisions);$j++){
        $x[$i++]=$class_divisions[$j];

        $no_of_students = $db->person->aggregate(
            array('$match'=>array("standard"=>$standard,"division"=>$class_divisions[$j])),
            array('$group'=>array("_id"=>"students", "total"=>array('$sum'=>1)))
            );
        $x[$i++]= $no_of_students["result"][0]["total"];


        $no_of_teachers = $db->ac_2013_2014->aggregate(
            array('$match'=>array("_id"=>"tts")),
            array('$unwind'=>'$subject'),
            array('$match'=>array("subject.standard"=>$standard)),
            array('$project'=>array("_id"=>0,"subject.teacher_id"=>1))
            );
            //distinct("subject.teacher_id",array("_id"=>"tts","subject.standard"=>$standard)));
            $x[$i++]= sizeof($no_of_teachers["result"]);


        }
        $y[$k++]=$x;
        $i=0;
}

echo json_encode($y);
