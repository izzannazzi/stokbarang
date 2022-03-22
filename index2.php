<?php

//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_stokbarang");

//ambil data dari tabel "barang"
$result = mysqli_query($koneksi, "SELECT * FROM barang");

//ambil data (fetch) dari object result
//mysqli_fetch_row(); // mengembalikan array numerik
//mysqli_fetch_assoc(); // mengembalikan array assosiatif
//mysqli_fetch_array();
//mysqli_fetch_object();

/* while ($brg = mysqli_fetch_assoc($result){
    var_dump($brg);
})
*/



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Stok barang</h1>
    
    <table border="1" cellpadding="10" cellpacing="0">
        <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Gambar</th>
            <th>Code Barcode</th>
            <th>Nama Barang</th>
            <th>Quantity (pcs)</th>
         </tr>

         <?php $i = 1; ?>
         <?php
                while ($row = mysqli_fetch_assoc($result)) :

         ?>
         <tr>
             <td><?= $i?></td>
             <td>
                 <a href="">ubah</a>
                 <a href="">hapus</a>
             </td> 
             <td>
                 <img src="img/<?= $row['gambar']?>" width="50">
             </td>
             <td><?= $row['code']?></td>
             <td><?= $row['name']?></td>
             <td><?= $row['quantity']?></td>
         </tr>
        <?php 
            $i++;    ?>

         <?php
            endwhile;
         ?>



    </table>


</body>
</html>