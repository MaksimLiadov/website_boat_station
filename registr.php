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
    <form action="person_insert.php" method="post">
    <div class="login">
        <h1>Вход</h1>
        <div class="input">
            <input type="text" placeholder="Логин" name="FIO">
            <input type="text" placeholder="Пароль" name="FIO">
            <input type="text" placeholder="ФИО" name="FIO">
            <input type="text" placeholder="Адрес" name="Address">
            <input type="text" placeholder="Паспортные данные" name="Pasport_data">
            <select name="pets" id="pet-select">
                <option value="">Выберите место отдыха</option>
                <option value="s1">Кама</option>
                <option value="s2">Иртыш</option>
                <option value="s3">Река3</option>
                </select>
        </div>
        <div class="login_buttons"> 
        <button type="submit">Зарегистрироваться</button>
            <p>
               У вас уже есть аккаунт? - <a href="/index.php"> Вход </a> 
            </p>
        </div>
    </div>
    </form>
</body>

</html>