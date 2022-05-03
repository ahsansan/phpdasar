<!-- Pengulangan -->
<!-- For, while, do.. while, forEach -->
<!-- Pengkondisian -->
<!-- If.. else, if else if else, ternary -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan dan Pengkondisian</title>
</head>
<body>

<h2>List Biasa</h2>
<ul>
<?php for ($i = 1; $i <= 10; $i++) : ?>
    <?php if ($i % 2 == 1) : ?>
    <li style="color:red">
        <?php echo $i . " " . "Kegiatan" . " " . $i ?>
    </li>
    <?php else : ?>
    <li style="color:green">
        <?= $i . " " . "Kegiatan" . " " . $i ?>
    </li>
    <?php endif ?>
<?php endfor ?>
</ul>    
</body>
</html>