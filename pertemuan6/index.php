<!-- Arraya associative -->

<?php

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
    <title>Array Associative</title>
    <style>
        .kotak {
            height: 150px;
            width: 150px;
            background-color: green;
            color: white;
            float: left;
            margin: 3px;
            padding: 3px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<?php foreach ($siswa as $s) : ?>
    <div class="kotak">
        <div>
        <p>Nama: <?php echo $s["nama"] ?></p>
        <p>Email: <?php echo $s["email"] ?></p>
        <p>Jurusan: <?php echo $s["jurusan"] ?></p>
        </div>
    </div>
<?php endforeach ?>
    
</body>
</html>