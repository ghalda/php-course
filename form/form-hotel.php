<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container my-5">
        <!-- Form -->
        <form method="POST">
            <h1 class="my-3">Pilih Paket Hotel</h1>
            <div class="row mb-3">
                <label for="input-name" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="input-name" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="input-paket" class="col-sm-2 col-form-label">Paket Hotel</label>
                <div class="col-sm-10">
                    <select name="paket_hotel" class="form-control" required>
                        <option value="" selected>--Pilih--</option>
                        <option value="Hotel Amariz" name="paket_hotel">Hotel Amariz</option>
                        <option value="Hotel Butiq" name="paket_hotel">Hotel Butiq</option>
                        <option value="Hotel Wyndem" name="paket_hotel">Hotel Wyndem</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="input-jumlah-malam" class="col-sm-2 col-form-label">Jumlah Malam</label>
                <div class="col-sm-10">
                    <input type="number" name="jumlah_malam" class="form-control" id="input-jumlah-malam" required>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Proses</button>
        </form>

        <!-- action after click the button -->
        <?php
        //condition after click the button
        // $ POST['name pf the triggered'] => return name from form input with POST Method (tentative)
        if (isset($_POST['submit'])) {
            //prepare for variable from input form
            // $variable = $_METHOD['name of input']
            
            include 'function.php';
            $username = $_POST['username'];
            $paket = $_POST['paket_hotel'];
            $jumlah = $_POST['jumlah_malam'];

            $totalan = hotelPrice($username, $paket, $jumlah);
        ?>

        <div class="my-3">
            <h1 class="my-3">Data Pelanggan</h1>
            <table class="table table-light">
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td><?= $totalan['username'] ?></td>
                </tr>
                <tr>
                    <td>Paket Hotel</td>
                    <td>:</td>
                    <td><?= $totalan['paket_hotel'] ?></td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td>:</td>
                    <td><?= "Rp" . number_format($totalan['harga'],0,",",".") ?></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><?= $totalan['jumlah'] ?></td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td><?= "Rp" . number_format($totalan['total_harga'],0,",",".") ?></td>
                </tr>
            </table>
        </div>
        <?php
            }
        ?>
    </div>
</body>

</html>