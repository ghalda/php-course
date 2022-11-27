<?php

//function Rectangular Area
function rectangularArea($length, $width)
{
    $area = $length * $width;

    return $area;
}

//function average
function keterangan($nilai_uts, $nilai_uas)
{
    $nilai_rata = ($nilai_uts + $nilai_uas) / 2;

    if ($nilai_rata >= 81 && $nilai_rata <= 100) {
        $keterangan = "A";
        $messages = "Excelent!";
    } else if ($nilai_rata >= 78 && $nilai_rata <= 80.99) {
        $keterangan = "A-";
        $messages = "Very Good!";
    } else if ($nilai_rata >= 75 && $nilai_rata <= 77.99) {
        $keterangan = "B+";
        $messages = "Good!";
    } else if ($nilai_rata >= 70 && $nilai_rata <= 74.99) {
        $keterangan = "B";
        $messages = "Not Bad!";
    } else if ($nilai_rata >= 65 && $nilai_rata <= 69.99) {
        $keterangan = "B-";
        $messages = "Bad!";
    } else if ($nilai_rata < 65) {
        $keterangan = "Tidak Lulus Mata Kuliah";
        $messages = "Try Again!";
    } else {
        $keterangan = "Tidak Terdefinisi";
        $messages = "Error!";
    }

    // return $keterangan;
    $data = array(
        'nilai_rata' => $nilai_rata,
        'keterangan' => $keterangan,
        'messages' => $messages
    );

    return $data;
}

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