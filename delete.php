<?php
include "koneksi.php";
$id = $_GET["id"];
$sql="DELETE FROM tbl_065 WHERE id_mhs=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete Data Gagal";
}else{
    echo "Data Mahasiswa berhasil di delete";
    echo "<a href ='data_mhs.php'> Show data </a>";

}
?>