<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/model/form/operation.php"; 
include_once $_SERVER['DOCUMENT_ROOT']."/view/lung/operation.php"; 

$second_level = array('project','points');
$first_level = array('wallets','category_add','consumable_services_add','counterparty_add');

$data = array();
$data_second_level = array();
foreach($first_level as $param){
    $data[$param] = qurery($mysql,$param);
};
foreach($second_level as $param){
    $data_second_level[$param] = qurery($mysql,$param);
};


$today = date("Y-m-d");
?>