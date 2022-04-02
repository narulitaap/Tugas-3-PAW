<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Edit Mahasiswa</title>
</head>
<body>
<?php
include "koneksi.php";
$id=$_GET["id"];
$sql = "SELECT * FROM tbl_065 WHERE id_mhs=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}
?>

<h3>Form Update Mahasiswa</h3>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form method="POST" action="update.php">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <input type="hidden" id="inputId" class="form-control" name="id_mhs" value="<?php echo $row['id_mhs']?>">
            </div>
        </div> <br/>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputNama" class="col-form-label">Nama Mahasiswa</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputNama" class="form-control" name="nama_mhs" value="<?php echo $row['nama_mhs']?>">
            </div>
        </div> <br/>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputNim" class="col-form-label">Nim Mahasiswa</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputNim" class="form-control" name="nim_mhs" value="<?php echo $row['nim_mhs']?>">
            </div>
        </div> <br/>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputAlamat" class="col-form-label">Alamat Mahasiswa</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputAlamat" class="form-control" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>">
            </div>
        </div><br/>

        <button class="btn btn-primary" type="submit">Update Form</button>
    </form>  
<?php }?>       
</body>
</html>