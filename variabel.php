<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Latihan 2 : Variabel</title>
</head>
<body>
    <?php
        //create variable
        $nama_lengkap = "Ghalda Putri Balqis"; //tipe data string
        $nim = 123456; //tipe data integer
        $nilai = 99.9; // tipe data double
        $lulus = true; // tipe data boolean (True/False)
        $lulus2 = "true"; // tipe data akan menjadi string
        $array = ['A', 'B', 'C'];
        //gettype ($nama_variabel) => adalah fungsi dari PHP untuk mengecek tipe data
    ?>

    <h2>Data Diri</h2>
    <ul>
        <li>Nama Lengkap : <?php echo $nama_lengkap; ?></li>
        <li>Tipe Data $nama_lengkap adalah <?php echo gettype($nama_lengkap)?></li>
        <li>Nomor Induk Mahasiswa : <?php echo $nim; ?></li>
        <li>Tipe Data $nim adalah <?php echo gettype($nim)?></li>
        <li>Nilai : <?php echo $nilai?></li>
        <li>Tipe Data $nilai adalah <?php echo gettype($nilai)?></li>
        <li>Lulus : <?php echo $lulus?></li>
        <li>Tipe Data $lulus adalah <?php echo gettype($lulus)?></li>
        <li>Lulus : <?php echo $lulus2?></li>
        <li>Tipe Data $lulus2 adalah <?php echo gettype($lulus2)?></li>
    </ul>
</body>
</html>