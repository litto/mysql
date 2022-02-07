<?php
ob_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

include("autoload.php");
$db     =   new MySql();
$db->connect(); 

$obj=new User();
$records=$obj->getall();

print_r($records);

$id=1;
$record=$obj->getdetails($id);

print_r($record);



?>
