<?php
include 'config.php';
print_r($_GET);
$id                 = $_GET['id'];
$nip_dosen          = $_GET['nip-dosen'];
$nama_dosen         = $_GET['nama-dosen'];
$jurusan            = $_GET['jurusan'];
$telepon            = $_GET['telepon'];
$matakuliah         = $_GET['matakuliah'];
$sks                = $_GET['sks'];
$update             = "UPDATE t_dosen SET Nip_Dosen='$nip_dosen', Nama_Dosen='$nama_dosen', Jurusan='$jurusan', Telepon='$telepon', Mata_Kuliah='$matakuliah', jumlah_sks='$sks' WHERE id='$id' ";
$hasil              = mysqli_query($mysqli, $update )or die(mysqli_error($mysqli));

if ($hasil) {
    header("location:index.php");
} else {
    echo "Maaf gagal edit";
}
