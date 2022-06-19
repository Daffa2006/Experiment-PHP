<?php
session_start() ;

if (isset($_POST['destroy']) ) {
    $_SESSION = [];
    session_unset();
    session_destroy();
}


if (isset($_POST["delete"]) ) {
    $index = intval( $_POST["delete"]);
    var_dump($_POST);
    echo "<hr>";
   
    $index -= 1;
    echo "<h1>" . $index . "<br></h1>";
    unset($rows[$index]);
   
}

if (isset($_POST['submit']) ) {

    $harga =  htmlspecialchars($_POST['input1']);
    $jumlah = htmlspecialchars($_POST['input2']);
    $namaBarang = htmlspecialchars( $_POST['input3']);
    $diskon = htmlspecialchars($_POST['diskon']);

        
    $total = $harga * $jumlah;
    $diskon2 = $total * $diskon / 100;
    $dibayar = $total - $diskon2;
    

    $row = [
        "nama" => $namaBarang, 
        "harga" => $harga, 
        "jumlah" => $jumlah, 
        "total" => $total, 
        "diskon" => $diskon, 
        "dibayar" => $dibayar
    ];


    if ( isset ($_SESSION["rows"]) ) {
        array_push($_SESSION["rows"], $row);
    } else {
        $_SESSION ["rows"] = [$row];
        
    } 
    $rows =  $_SESSION["rows"];

    
    
} else {
    $rows =  $_SESSION["rows"];

}
var_dump($rows);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        body {
            font-family: arial;
        }
        label, button {
            display: block;
            margin-top: 10px;
            color: #010101;
        }

       input {
           width: 250px;
           height: 20px;
           background-color:azure;
           border: 1px solid #010101;
       }

       input:focus, select:focus {
           outline: 1px solid dimgray;
       }
       table {
           border-collapse: collapse;
       }

    </style>
</head>
<body>
    
    <h3><?php var_dump($_POST); ?></h3>
    <form action="" method="post">
        <label for="input1">Masukkan Harga</label>
        <input type="text" name="input1" for="input1" required autocomplete="off">

        <label for="input2">Masukkan Jumlah</label>
        <input type="text" name="input2" for="input2" required>

        <label for="input3">Nama Barang</label>
        <input type="text" name="input3" for="input3" required>

        <label for="diskon">Pilih Diskon</label>
        <select name="diskon" id="diskon">
            <option value="0" >tidak ada</option>
            <option value="10">10%</option>
            <option value="25">25%</option>
            <option value="50">50%</option>
            <option value="90">90%</option>
        </select>

        <button type="submit" name="submit">Beli!</button>
        
        
    </form>
    <form action="" method="post">
        <button type="submit" name="destroy">HAPUS SESSION!</button>
    </form>
            <table border="1" cellpadding="8">
                <tr>
                    <th>No.</th>
                    <th>Nama barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Total</th>
                    <th>diskon</th>
                    <th>Dibayar</th>
                    <th>Aksi</th>
                </tr>
            
            <?php if (isset($rows) ) : ?>
                <?php $i= 1; ?>
                <?php foreach ( $rows as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    
                    <td><?= $row["nama"];?></td>
                    <td><?= $row["harga"] ?></td>
                    <td><?= $row["jumlah"] ?></td>
                    <td><?= $row["total"] ?></td>
                    <td><?= $row["diskon"] ?></td>
                    <td><?= $row["dibayar"] ?></td>
                    <form action="" method="post">
                    <td><button type="submit" name="delete" value="<?= $i ?>">Hapus</button></td>
                    </form>
                </tr>
            
            <?php $i++; ?>
            <?php endforeach; ?>
            </table>
            <?php endif; ?>
                
</body>
</html>