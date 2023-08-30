<?php
    session_start();
    require_once 'connect.php';

   $ID = $_SESSION['user']['id'];

   $IsFreeU = mysqli_query($connect, "SELECT * FROM `User` WHERE `id_user` = $ID AND `id_watercraft` >= 0;");
   $FreeU = mysqli_fetch_all($IsFreeU);

   //Получение id лодки через url
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $IdWatercraft = $query['id'];
    $IsFreeW = mysqli_query($connect, "SELECT * FROM `watercraft` WHERE `id_user` >=1 AND `id_watercraft` =  $IdWatercraft");
    $FreeW = mysqli_fetch_all($IsFreeW);
    
    $SQLReservoirU = mysqli_query($connect, "SELECT `id_reservoir` FROM `User` WHERE `id_user` = $ID;");
    $ReservoirU= mysqli_fetch_all($SQLReservoirU);
    $SQLReservoirW = mysqli_query($connect, "SELECT `id_reservoir` FROM `watercraft` WHERE `id_watercraft` = $IdWatercraft;");
    $ReservoirW= mysqli_fetch_all($SQLReservoirW);
    
    if($ReservoirU == $ReservoirW)
    $water_body_identity = true;
    else 
    $water_body_identity = false;

    if($water_body_identity)
    print_r("true");
    else
    print_r("false");

    $sqlU = "UPDATE `User` SET `id_watercraft` = $IdWatercraft WHERE `User`.`id_user` = $ID;";
    $sqlW = "UPDATE `watercraft` SET `id_user` = $ID WHERE `watercraft`.`id_watercraft` =  $IdWatercraft;";

   if (!$FreeU && !$FreeW && $water_body_identity) 
   {
        //print_r("Можно");
        mysqli_query($connect, $sqlU);
        mysqli_query($connect, $sqlW);
    } 
    else {
    //print_r("Нельзя");
}
   
    header('Location: main.php');
?>