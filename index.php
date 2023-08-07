<?php
session_start();
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
    <form action="signin.php" method="post">
    <div class="login">
        <h1>Вход</h1>
        <div class="input">
            <input type="text" placeholder="Логин" name="login">
            <input type="password" placeholder="Пароль" name="password">
        </div>
        <div class="login_buttons">
            <ul>
            <li><button type="submit">Войти</button> </li>
            <li><a href="/registr.php"> Регистрация </a></li>
            </ul>
        </div>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </div>
    </form>
</body>

</html>