<?php 
// var_dump($_GET);

/** Валідація обовязкових параметрів
 * Обов'язкові параметри
 * wallets
 * sum
 */
$error = array();
$important = ['wallets','sum'];

if (isset($_GET['wallets'])) {
    $status = "done";
    $wallets = $_GET['wallets'];
} else {
    $error[] = "Виберіть гаманець";
}

if (empty($_GET['sum'])) {
    $error[] = "Введіть суму платежу";
} else {
    $status = "done";
    $sum = $_GET['sum'];
}


/**Валідація пустих блоків
 * Якщо пусті форми
 * category
 * counterparty
 * consumable_services
 * points
 * project
 */

// category
if(empty($_GET['category'])){
    $_GET['category'] = 0;
    $category = 0;
}else {
   $category = +$_GET['category'];
}
// counterparty
if(empty($_GET['counterparty'])){
    $_GET['counterparty'] = 0;
    $counterparty = 0;
}else {
   $counterparty = +$_GET['counterparty'];
}
// consumable_services
if(empty($_GET['consumable_services'])){
    $_GET['consumable_services'] = 0;
    $consumable_services = 0;
}else {
   $consumable_services = +$_GET['consumable_services'];
}
// points
if(empty($_GET['points'])){
    $_GET['points'] = 0;
    $points = 0;
}else {
   $points = +$_GET['points'];
}
// project
if(empty($_GET['project'])){
    $_GET['project'] = 0;
    $project = 0;
}else {
   $project = +$_GET['project'];
}

$date_send = $_GET["date_send"];
$date_add = $_GET["date_add"];

// Статус форми

if (!empty($error[0])) {
    var_dump($error);
} else{
    echo $wallets."<br>";
    echo $sum."<br>";
    echo $category."<br>";
    echo $counterparty."<br>";
    echo $consumable_services."<br>";
    echo $points."<br>";
    echo $project."<br>";
    echo $date_send."<br>";
    echo $date_add."<br>";

}




?>