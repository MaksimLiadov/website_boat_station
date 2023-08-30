<?php
    session_start();
    require_once 'connect.php';
    print_r($_POST);
    $Reservoir_id = $_POST['select'];
    $User_id = $_SESSION['user']['id'];

    $sql = " UPDATE `User` SET `id_reservoir` = '$Reservoir_id' WHERE `User`.`id_user` =  $User_id;";
    
    mysqli_query($connect, $sql);

    header('Location: main.php');
?>