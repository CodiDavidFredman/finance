<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/controler/common/header.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

     <!-- style -->
     <link rel="stylesheet" href="../app/style/style.css">
</head>
<body>
    <header>
       <button id="add_income"><?= $header_lung['income'];?></button>
       <button id="add_сost"><?= $header_lung['сost'];?></button>
       <button id="add_transfer"><?= $header_lung['transfer'];?></button>
    </header>
    
