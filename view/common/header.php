<?php 
include_once $_SERVER['DOCUMENT_ROOT']."/controler/common/header.php"; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font Montserrat -->
    <link rel="stylesheet" href="/app/fonts/Montserrat/stylesheet.css">
   
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
     <!-- style -->
     <link rel="stylesheet" href="../app/style/style.css">
     <link rel="stylesheet" href="../app/style/leftBar.css">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>
<body> 
    <header>
        <div class="container"> 
            <div class="logo">
                <img src="/app/image/white-logo.png" alt="">
            </div>
            <button id="add_income" class="button_calc"><?= $header_lung['income'];?></button>
            <button id="add_сost" class="button_calc"><?= $header_lung['сost'];?></button>
            <button id="add_transfer" class="button_calc"><?= $header_lung['transfer'];?></button>
        </div>
    </header>
    
    <?php include_once  $_SERVER['DOCUMENT_ROOT']."/view/common/home.php" ?>
