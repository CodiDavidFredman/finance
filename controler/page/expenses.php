<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/model/page/expenses.php"; 
include_once $_SERVER['DOCUMENT_ROOT']."/view/lung/expenses.php"; 

// $params = array('wallets','category','counterparty','consumable_services','points','project');
$params = array('wallets','category','counterparty');

$data = array();

foreach($params as $param){
    $data[$param] = qurery($mysql,$param);
};


$today = date("Y-m-d");
?>