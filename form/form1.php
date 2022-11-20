<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1 (GET METHOD)</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container my-5">
        <!-- Form -->
        <form>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3" required>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </fieldset>
            <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
        </form>

        <!-- action after click the button -->
        <?php
        //condition after click the button
        // $ GET['name pf the triggered'] => return name from form input with GET Method (tentative)
        if (isset($_GET['submit'])) {
            //prepare for variable from input form
            // $variable = $_METHOD['name of input']
            $email = $_GET['email'];
            $password = sha1($_GET['password']); // sha1 => metode enskripsi
            $gender = $_GET['gender'];

            // echo "Email : $email <br>";
            // echo "Password : $password <br>";
            // echo "Gender : $gender <br>";
        ?>

        <!-- Hasil inputan yang kita tampilkan menggunakan tag html biar lebih mudah untuk stylingnya -->
        <!-- kita apit tag html ini di script PHP saat aksi tertentu -->
            <div class="my-3">
                <h1>Data User</h1>
                <table class="table table-light">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email ?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><?= $password ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td><?= $gender ?></td>
                </tr>
            </table>
            </div>
            
        <?php
            }
        ?>
    </div>
</body>

</html>