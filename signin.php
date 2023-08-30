<?php
    session_start();
    require_once 'connect.php';

    $Login = $_POST['login'];
    $Password = $_POST['password'];
    $Password = md5($Password);

    $chek_user = mysqli_query($connect, "SELECT * FROM `User` WHERE `login` = '$Login' AND `password` = '$Password'");

    if(mysqli_num_rows($chek_user)>0){
        
       $user = mysqli_fetch_assoc($chek_user);
        $_SESSION['user'] = [
            "id" => $user['id_user'],
            "name" => $user['fio']
        ];

        header('Location: main.php');
    }
       else{
            $_SESSION['message'] = 'Не верный логин или пароль.';
            header('Location: index.php');
        }
?>