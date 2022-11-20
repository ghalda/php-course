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
    $length = $_POST['length'];
    $width = $_POST['width'];
    // for measure rectangular area, we used rectangluarArea($length, $width) in function.php
    // submit file function.php to file needed
    include 'function.php';
    // include './form1.php';
    $area = rectangularArea($length, $width);
    ?>

<body>
    <!-- Receive input form_input.php -->
    <!-- Adjust Method based on methon in form_input.php -->
    <div class="container my-5">
        <a href="form_input.php">Back to Form</a>
        <h1>Rectangular Area</h1>
        <table class="table table-light">
            <tr>
                <td>Length</td>
                <td>:</td>
                <td><?= $length ?></td>
            </tr>
            <tr>
                <td>Width</td>
                <td>:</td>
                <td><?= $width ?></td>
            </tr>
            <tr>
                <td>Rectangular Area</td>
                <td>:</td>
                <td><?= $area ?></td>
            </tr>
        </table>
    </div>
</body>

</html>