<?php

// Pertemuan 2 - PHP Dasar
// Sintak PHP

// Standard Output
// echo, print
echo "Ahsan pakai echo <br/>";
print "Ahsan pakai print <br/>";
// print_r
print_r("Ahsan pakai print_r <br/>");
// var_dumb
var_dump("Ahsan pakai var_dump");

// Syntax PHP
// Deklarasi
$nama_depan = "Maulana";
$nama_belakang = "Ahsan";
$tahun_lahir = 1998;
$tahun_sekarang = 2022;

// Operator
// + - * / %
// . (concate)
// = += -= *= /= %= .=
// > <
// >= <= != ==
// && \\ === !==

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Part</title>
</head>
<body>
    <h1>Selamat datang di HTML Part</h1>
    <p>Nama depan saya adalah <?php echo $nama_depan ?></p>
    <p>Sementara nama belakang saya adalah <?php echo $nama_belakang ?></p>
    <p>Jika digabung menjadi <?php echo $nama_depan . " " . $nama_belakang ?></p>
    <p>Tahun lahir saya adalah <?php echo $tahun_lahir ?> dan sekarang adalah tahun <?php echo $tahun_sekarang ?> jadi umur saya sekarang <?php echo $tahun_sekarang - $tahun_lahir ?> tahun</p>
</body>
</html>