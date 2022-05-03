<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET["nama"] ?></title>
</head>
<body>

<h2>Latihan GET</h2>

<ul>
    <li>Nama: <?= $_GET["nama"] ?></li>
    <li>Email: <?= $_GET["email"] ?></li>
    <li>Jurusan: <?= $_GET["jurusan"] ?></li>
</ul>
    
</body>
</html>