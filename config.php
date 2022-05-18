<?php 
$host = "fb392521.mysql.tools";
$login = "fb392521_finance";
$password = "e5N4&sz6-T";
$nameBD = "fb392521_finance";
$mysql = mysqli_connect($host, $login, $password, $nameBD);
if ($mysql == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
mysqli_set_charset($mysql,"utf8");

?>
