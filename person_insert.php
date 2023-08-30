<?php
    require_once 'connect.php';
    print_r($_POST);
    $Login = $_POST['login'];
    $Password = $_POST['password'];
    $Address = $_POST['Addres'];
    $FIO = $_POST['FIO'];
    $Pasport_data = $_POST['Pasport_data'];

    $Password = md5($Password);

    $sql = "INSERT INTO `User` (`id_user`, `fio`, `pasport_data`, `addres`, `issue_date`, `id_reservoir`, `instruction`, `use_duration`, `login`, `password`, `id_watercraft`) VALUES (NULL, '$FIO', '$Pasport_data', '$Address', NULL, NULL, NULL, NULL, '$Login', '$Password', NULL)";
    
    mysqli_query($connect, $sql);

    header('Location: index.php');
?>