<?php

/**
 *  Получаем данные с таблицы
 *  Принимает подключение mysql
 *  И ключевой запрос
 */
function qurery($mysql,string $str){
$query = mysqli_query($mysql,"SELECT * FROM $str");
$arr = array();
while($rws = mysqli_fetch_assoc($query)){
    $arr[] = $rws;
}
return $arr;
}

?>