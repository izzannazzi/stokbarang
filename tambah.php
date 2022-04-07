<?php
// koneksi DBMS
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  //cek apakah berhasil ditambahkan atau tidak

  if (tambah($_POST) > 0) {
      echo "<script> alert('Data Berhasil disimpan');
        document.location.href = 'index.php'; 
        </script>";
    } else {
        echo "<script> alert('Data Gagal disimpan');
        document.location.href = 'index.php'; 
        </script>";
  }
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>
    
<h1>Tambah Data Stok Barang</h1>

<form action="" method="POST">
    <ul>
        <li>
            <label for="code">Code Barcode :</label>
            <input type="text" name="code" id="code" required>
        </li>
        <li>
            <label for="nama">Nama Barang :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="qty">Quantity :</label>
            <input type="number" name="qty" id="qty" required>
        </li>
        <li>
            <label for="gbr">Gambar :</label>
            <input type="text" name="gbr" id="gbr" required>
        </li>
        <br>
        <br>
        
        <button type="submit" name="submit">Simpan</button>
        
        
    </ul>

</form>

</body>
</html>