<?php

//function harga hotel
function hotelPrice($username, $paket, $jumlah)
{
    if ($paket == "Hotel Amariz") {
        $harga = 250000;
        $total_harga = $harga * $jumlah;
    } else if ($paket == "Hotel Butiq") {
        $harga = 350000;
        $total_harga = $harga * $jumlah;
    } else if ($paket == "Hotel Wyndem") {
        $harga = 225000;
        $total_harga = $harga * $jumlah;
    } else {
        $harga = "Error!";
        $total_harga = "Error!";
    }

    $data = array(
        'username' => $username,
        'harga' => $harga,
        'total_harga' => $total_harga,
        'paket_hotel' => $paket,
        'jumlah' => $jumlah
    );

    return $data;
}
?>