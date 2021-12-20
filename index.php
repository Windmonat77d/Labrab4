<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Test 1: <?= "Hello, World!<br>" ?></p>
    <p>Test 1: <?= 2 + 2 ?></p>

    <form action="back.php" style="margin-bottom: 50px;" method="post" required>
        <input type="text" name="name" placeholder="Введите имя">
        <input type="submit">
    </form>

    <a href="/str_first.php" style="margin-right: 20px;">Первая страница</a>
    <a href="/str_sec.php">Вторая страница</a>
</body>
</html>