<?php

// $_GET

$siswa = [
    [
        "nama" => "Maulana",
        "email" => "seo.maulana@gmail.com",
        "jurusan" => "RPL"
    ],
    [
        "nama" => "Ahsan",
        "email" => "ahsan@gmail.com",
        "jurusan" => "Bahasa Jepang"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Get</title>
</head>
<body>
    <h2>Latihan Get</h2>
    <?php foreach ($siswa as $s) : ?>
    <div class="kotak">
        <ul>
            <a href="latihan2.php?nama=<?= $s["nama"]; ?>&email=<?= $s["email"]; ?>&jurusan=<?= $s["jurusan"]; ?>">
                <li><?php echo $s["nama"] ?></li>
            </a>
        </ul>
    </div>
<?php endforeach ?>
</body>
</html>