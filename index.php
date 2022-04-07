<?php

require 'functions.php';
$stokbarang = query("SELECT * FROM barang");



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
    <a href="tambah.php">Tambah Data Stok</a>
    <br> </br>
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
                foreach ($stokbarang as $row) :  
             
         ?>
         <tr>
             <td><?= $i?></td>
             <td>
                 <a href="">ubah</a> | 
                 <a href="hapus.php?id=<?= $row['id']; ?>">hapus</a>
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
            endforeach;
         ?>



    </table>


</body>
</html>