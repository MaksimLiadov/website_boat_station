<?php
    require_once 'connect.php';
    require_once 'style.css';
?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <title>Вход</title>
    
</head>

<body>
    <form action="" method="post">
    <div class="login">
        <h1>Вход</h1>
        <div class="input">
            <input type="text" placeholder="Логин" name="FIO">
            <input type="password" placeholder="Пароль" name="Address">
        </div>
        <div class="login_buttons">
            <ul>
            <li><button type="submit">Вход</button> </li>
            <li><a href="/registr.php"> Регистрация </a></li>
            </ul>
        </div>
    </div>
    </form>
</body>

</html>