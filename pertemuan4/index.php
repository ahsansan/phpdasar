<!-- Fuction -->
<?php

// Bawaam
echo date("l, d-M-Y");
echo "<br/> Satu minggu kemudian <br/>";
echo date("l, d-M-Y", time()+60*60*24*7);

// Bikin sendiri
function salam($nama) {
    return "Selamat datang $nama";
}

function umur($tahun_lahir, $tahun_sekarang) {
    return $tahun_sekarang - $tahun_lahir;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencoba Function Sederhana</title>
</head>
<body>
    <h2><?= salam("Ahsan") ?></h2>
    <h2>Anda sekarang berusia <?php echo umur(1998, 2022) ?> tahun</h2>
</body>
</html>