<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
} else {
    echo "koneksi ke basis data SUKSES!";
}

//$query ="insert into harga_barang (kode, nama_barang, harga) ".
 //   "values(" . $_POST["kode"].", '".$_POST["namaBarang"].
   // "',".$_POST["harga"].")";
   $query = "INSERT INTO mahasiswa(nim,nama,jurusan) VALUES('".$_POST['nim']."','".$_POST['nama']."' ,'".$_POST['jurusan']."') ";
"update mahasiswa "
$query = "update harga_barang " .
        "set nama_barang = ' ". $_POST["namaBarang"] . "',".
        "   harga = " . $_POST["harga"] . " " .
        "where kode = " . $_POST["kode"];

//echo $query;

if($koneksi->query($query)==true){
    echo "<br>Data".$_POST["namaBarang"].
    " sudah berubah. Data bisa dilihat ".
    '<a href="main.php">disini</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

?>