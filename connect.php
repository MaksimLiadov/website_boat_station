<?php
    $connect = mysqli_connect("BoatStation", "root", '', "boathouse");

    if (!$connect) {
        die("Не удалось подключиться к базе данных!");
    }
?>