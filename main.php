<?php
    session_start();
    require_once 'connect.php';
    require_once 'style.css';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>

    <form action="reservoir_update.php" method="post">
        <div class="water_body_selection">
        <ul>
            <li><select name="select">
                <option selected value="1">Кама</option>
                <option value="2">Чусовая</option>
                <option value="3">озеро Адово</option>
                <option value="4">Усьва</option>
                </select>
            </li>
            <li><button type="submit">Выбрать</button></li>
    
            <li><button><a href="instructing.php">Пройти инструктаж</a></button></li>
            <li><?=$_SESSION['user']['name']?></li>
        </ul>
        </div>
    </form>
    
    
    <table>
        <tr>
            <th>Тип плавстредства</th>
            <th>место</th>
            <th>Название</th>
            <th>Номер плавстредства</th>
            <th>Список спассательных средств</th>
            <th>Состояние</th>
            <th>Можно ли арендовать</th>
        </tr>

        <?php
            $watercraft = mysqli_query($connect, "SELECT * FROM `watercraft`");
            $rows = mysqli_fetch_all($watercraft);
            foreach($rows as $row) {
                if($row[3] == 1)
                $row[3] = "Кама";
                if($row[3] == 2)
                $row[3] = "Чусовая";
                if($row[3] == 3)
                $row[3] = "озеро Адово";
                if($row[3] == 4)
                $row[3] = "Усьва";
                if($row[2] == NULL)
                $row[2] = "Свободно";
                else
                $row[2] = "Занято";
                ?>
                      <tr>
                        <td><?= $row[4] ?></td>
                        <td><?= $row[3] ?></td>
                        <td><?= $row[6] ?></td>
                        <td><?= $row[7] ?></td>
                        <td><?= $row[8] ?></td>
                        <td><?= $row[5] ?></td>
                        <td><?= $row[2] ?></td>
                        <td> <a href= "order.php?id=<?= $row[0] ?>">Заказать</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>

</body>
</html>