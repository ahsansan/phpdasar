<?php

// Array
$hari = array("Senin", "Selasa", "Rabu");
$nama = ["Ahsan", "Maulana", "Muhammad"];
$siswa = [
    [
        "Ahsan",
        "XII RPL",
        98
    ],
    [
        "Maulana",
        "XII TKJ",
        80
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Array</title>
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

<?php for ($i = 0; $i < count($hari); $i++) : ?>
    <div class="kotak"><?php echo $hari[$i] ?></div>
<?php endfor ?>

<?php foreach ($nama as $n) : ?>
    <div class="kotak"><?php echo $n ?></div>
<?php endforeach ?>

<?php foreach ($siswa as $s) : ?>
    <div class="kotak">
        <div>
        <p>Nama: <?php echo $s[0] ?></p>
        <p>Kelas: <?php echo $s[1] ?></p>
        <p>Nilai: <?php echo $s[2] ?></p>
        </div>
    </div>
<?php endforeach ?>

</body>
</html>