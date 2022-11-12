<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 : If Else</title>
</head>
<body>
    <?php
        $nilai_uts = 92;
        $nilai_uas = 95;
        $nilai_rata = ($nilai_uts + $nilai_uas) / 2;

        //condition (2 condition)
        if($nilai_rata == 100){
          //dua operator sama dengan artinya dibandingkan bukan deklarasi nilai
          //tiga operator sama dengan artinya membandingkan suatu nilai (isinya) dan juga tipe datanya
          $keterangan = "Selamat Anda Lulus!";
        } else{
            $keterangan = "Maaf Anda Belum Lulus!";
        }

        //condition (3 condition or more)
        if($nilai_rata >= 90){
            $keterangan2 = "Excelent!";
          } else if($nilai_rata >= 80 && $nilai_rata <= 89){
            $keterangan2 = "Good";
          } else{
              $keterangan2 = "Not Bad!";
          }

        //perbandingan nilai dari variabel beserta tipe datanya
        $username = "onyourc__ode";
        $password = "1995";

        //condition
        if($username === "onyourc__ode" && $password === "1995"){ // membandingkan tipe data
            $succes = "Yes";
        } else {
            $succes = "No";
        }

        //another condition
        $data = "DATA";
        if($data == "DATA") :
            $valid = true;
        else :
            $valid = false;
        endif;
    ?>

    <h2>Nilai Rata-Rata Siswa Synapse Academy</h2>
    <ol style="line-height: 2rem;">
        <li><?= "Keterangan 2 Kondisi : $keterangan !"?></li>
        <li><?= "Keterangan 3 Kondisi : $keterangan2"?></li>
    </ol>

    <h2>Halaman Login</h2>
    <p><?= "Apakah Data Benar ? $succes"?></p>
    <p><?= "Apakah Data Benar ? $valid" ?></p>
</body>
</html>