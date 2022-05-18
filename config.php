<?php 
$host = "localhost";
$login = 'root';
$password = "";
$nameBD = "project";
$mysql = mysqli_connect($host, $login, $password, $nameBD);
if ($mysql == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
mysqli_set_charset($mysql,"utf8");

?>
