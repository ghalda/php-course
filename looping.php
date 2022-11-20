<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 (looping)</title>
</head>
<body>
    <?php
        // looping FOR => looping yg diketahui nilai akhirnya
        /*
        for($nilaiawal; $variabel <= $batasan; $variabel++ ){
            script menampilkan atau melakukan apa sebanyak looping yang disetting
        }
        */
        // increment (menaik)
        for($i = 1; $i <= 10; $i++) {
            // menampilkan Hello sebanyak looping yg disetting
            echo "Hello - $i <br>";
        }
        echo "<hr>";
        // decrement (menurun)
        for($a = 10; $a >= 1; $a--) {
            echo "Hello - $a <br>";
        }

        echo "<br>";

        // looping WHILE => looping yg tidak diketahui batas akhirnya
       /*
        $nilaiawal = 1;
        while($nilaiawal <= batasan){
            script menampilkan atau melakukan apa sebanyak looping yang disetting

            kondisi
            apakah ++ / --
        }
        */

        $nilaiawal = 1;
        while($nilaiawal <= 10){
            // apa yg dilakukan
            echo "Hallo While - $nilaiawal <br>";

            // kondisi
            $nilaiawal++;
        }
        echo "<br>";
        // looping FOREACH => biasa dipakai utk looping pd tipe data array
        $data1 = [
            'BA0001',
            'BA0002',
            'BA0003'
        ];

        $data2 = array(
            'CA0001',
            'CA0002',
            'CA0003'
        );

        /*
        foreach($variabel as $vr) {
            lakukan apa yg ingin dilakukan sebanyak looping datanya
        }
        */

        foreach($data1 as $dt1) {
            echo "$dt1 <br>";
        }

    ?>
</body>
</html>