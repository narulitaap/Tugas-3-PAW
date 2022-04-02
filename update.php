<?php
include "koneksi.php";
$id = $_POST["id_mhs"];
$nama = $_POST["nama_mhs"];
$nim = $_POST["nim_mhs"];
$alamat = $_POST["alamat_mhs"];

$sqli = "UPDATE tbl_065 SET nama_mhs = '$nama',nim_mhs = '$nim',alamat_mhs = '$alamat' WHERE id_mhs = $id";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi update mahasiswa gagal";
}else{
    echo "Eksekusi update mahasiswa berhasil<br/>";
    echo "<a href='data_mhs.php'>show data</a>";
}
?>