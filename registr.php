<?php
    session_start();
    require_once 'connect.php';
    require_once 'style.css';
?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <title>Регистрация</title>
    
</head>

<body>
    <form action="person_insert.php" method="post">
    <div class="login">
        <h1>Регистрация</h1>
        <div class="input">
            <input type="text" placeholder="Логин" name="login">
            <input type="text" placeholder="Пароль" name="password">
            <input type="text" placeholder="ФИО" name="FIO">
            <input type="text" placeholder="Адрес" name="Address">
            <input type="text" placeholder="Паспортные данные" name="Pasport_data">
        </div>
        <div class="login_buttons"> 
        <ul>
            <li><button type="submit">Зарегистрироваться</button></li>
            <li> <p>У вас уже есть аккаунт? - </p></li>
            <li><a href="/index.php"> Вход </a></li>
        </ul>
        </div>
    </div>
    </form>
</body>

</html>