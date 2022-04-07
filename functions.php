<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_stokbarang");

function query ($query){

    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){

    global $koneksi;

    $code = htmlspecialchars($data["code"]);
    $name = htmlspecialchars($data["nama"]);
    $quantity = htmlspecialchars($data["qty"]);
    $gambar = htmlspecialchars($data["gbr"]);
     
    // query insert ke database
     $query = "INSERT INTO barang
     VALUES
     ('', '$code', '$name', 
     '$quantity', '$gambar')
     ";
mysqli_query($koneksi,$query);
return mysqli_affected_rows($koneksi);
}


function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM barang WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}
?>