<?php
require_once './database.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
body {
background-image: url("./222.jpg");
color: #491217;
}
</style>
<table>
    <?php foreach (getAll() as $product) : ?>
        <tr>
            <td><?php echo $product[0] ?></td>
            <td><?php echo $product[1] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<div align="center">
    <form action="./index.php" method="post">
        <input type="text" name="title" placeholder="Имя">
        <input type="text" name="price" placeholder="Сообщение">
        <button type="submit" name="submit">Отправить</button>
</div>
</form>
</body>
</html>