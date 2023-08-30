<?php
    session_start();
    require_once 'connect.php';

    $User_id = $_SESSION['user']['id'];
    
    $sql = "UPDATE `User` SET `instruction` = '1' WHERE `User`.`id_user` = $User_id;";
    
    mysqli_query($connect, $sql);
    header('Location: main.php');
?>