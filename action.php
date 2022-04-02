<?php
include "koneksi.php";
$nama = $_POST["nama_mhs"];
$nim = $_POST["nim_mhs"];
$alamat = $_POST["alamat_mhs"];

$sqli = "INSERT INTO tbl_065 VALUES(null,'$nama','$nim','$alamat')";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi tambah mahasiswa gagal";
}else{
    echo "Eksekusi tambah mahasiswa berhasil<br/>";
    echo "<a href='data_mhs.php'>show data</a>";
}
?>