<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container my-5">
        <form action="form_hasil_nilai.php" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nilau UTS</label>
                <input type="number" name="nilai_uts" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nilai UTS">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nilai UAS</label>
                <input type="number" name="nilai_uas" class="form-control" id="formGroupExampleInput2" placeholder="Enter Nilai UAS">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Process</button>
        </form>
    </div>
</body>

</html>