<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hasil</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<!-- Receive input form_input.php -->
<!-- Adjust Method based on methon in form_input.php -->
    <?php
    //prepare for variable from input form
    // $variable = $_METHOD['name of input']   
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    // for measure Nilai Rata-Rata Siswa, we used rectangluarArea($length, $width) in function.php
    // submit file function.php to file needed
    include 'function.php';
    // include './form1.php';
    $hasil = keterangan($nilai_uts, $nilai_uas);
    ?>

<body>
    <!-- Receive input form_input.php -->
    <!-- Adjust Method based on methon in form_input.php -->
    <div class="container my-5">
        <a href="form_input_nilai.php">Back to Form</a>
        <h1>Nilai Rata-Rata Siswa</h1>
        <table class="table table-light">
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?= $nilai_uts ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?= $nilai_uas ?></td>
            </tr>
            <tr>
                <td>Nilai Rata-Rata</td>
                <td>:</td>
                <td><?= $hasil['nilai_rata'] ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><?= $hasil['keterangan'] ?></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>:</td>
                <td><?= $hasil['messages'] ?></td>
            </tr>
        </table>
    </div>
</body>

</html>