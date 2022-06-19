<?php

function pembayaran ($data) {

    

    $harga =  htmlspecialchars($data['input1']);
    $jumlah = htmlspecialchars($data['input2']);
    $namaBarang =htmlspecialchars( $data['input3']);
    $diskon = htmlspecialchars($data['diskon']);

        
    $total = $harga * $jumlah;
    $diskon2 = $total * $diskon / 100;
    $dibayar = $total - $diskon2;

    $row = [];
    $tampil = true;
    
}

function query ($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; 

    }
    return $rows;
}

?>