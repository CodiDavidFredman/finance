<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/config.php";


/** Валідація обовязкових параметрів
 * Обов'язкові параметри
 * wallets
 * sum
 */
// $important = ['wallets','sum'];

//TODO: Зробити звязок з перевіркою форм та відправкою відповіді на сторінку


if (isset($_GET['wallets'])) {
    $wallets = $_GET['wallets'];
} else {
    $status = ['status' => 'Виберіть гаманець'];

}

if (empty($_GET['summ'])) {
    // $status[] = "Введіть суму платежу";
    $status = ['status' => 'Введіть суму платежу'];

} else {
    $summ = $_GET['summ'];
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
$type = $_GET["type_operation"];
$comments = $_GET["comments"];

// Статус форми

if (!empty($error[0])) {
    echo($error[0]);
} else{

        if($date_send !== $date_add){
            $statusDB = '1';
        }else{
            $statusDB = '0';
        };
};
if(count($status)>0){
    echo json_encode($status);

}else{
    if(mysqli_query($mysql, " INSERT INTO `transactions` (`id`, `type_operation`, `id_category`, `id_wallet`,`summ`, `id_counterparty`, `id_consumable_services`, `id_points`, `comment`, `data_add`, `data_change`, `status`) VALUES (NULL, '$type', '$category', '$wallets','$summ', '$counterparty', '$consumable_services', '$points', '$comments', '$date_send', '$date_add', '$statusDB')")){
        $status = ['status' => 'done'];
    };
}

?>