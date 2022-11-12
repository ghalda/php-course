<?php
    $title = "Latihan 3 : Operator";

    //Variabel
    $a = 7;
    $b = 3;

    //Operator
    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $sisa_bagi = $a % $b;
    $pangkat = $a ** $b;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>
<body>
    <h2>Operasi Hitung</h2>
    <p>Jika A = 7 dan B = 3, maka:</p>
    <ol style="line-height: 2rem;">
        <li>A + B = <?= $penjumlahan?></li>
        <li>A - B = <?= $pengurangan?></li>
        <li>A x B = <?= $perkalian?></li>
        <li>A : B = <?= $pembagian?></li>
        <li>Sisa Bagi A dan B = <?= $sisa_bagi?></li>
        <li>A<sup>B</sup> = <?= $pangkat?></li>
    </ol>
    <br>
    <h2>Operasi Hitung</h2>
    <ol style="line-height: 2rem;">
        <li><?php echo "$a + $b = $penjumlahan"?></li>
        <li><?php echo "$a - $b = $pengurangan"?></li>
        <li><?php echo "$a * $b = $perkalian"?></li>
        <li><?php echo "$a / $b = $pembagian"?></li>
        <li><?php echo "Sisa bagi $a dan $b = $sisa_bagi"?></li>
        <li><?php echo "$a <sup>$b</sup> = $pangkat"?></li>
    </ol>
</body>
</html>