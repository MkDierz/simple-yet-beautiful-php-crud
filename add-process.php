<?php
include "config.php";
$nip_dosen          = $_GET['nip-dosen'];
$nama_dosen         = $_GET['nama-dosen'];
$jurusan            = $_GET['jurusan'];
$telepon            = $_GET['telepon'];
$matakuliah         = $_GET['matakuliah'];
$sks                = $_GET['sks'];
$input              = "INSERT INTO t_dosen(Nip_Dosen, Nama_Dosen, Jurusan, Telepon, Mata_Kuliah, jumlah_sks) 
                              VALUES ('$nip_dosen','$nama_dosen','$jurusan','$telepon','$matakuliah','$sks')";
$hasil              = mysqli_query($mysqli, $input);
if ($hasil) {
    header("location:index.php");
} else {
    echo "Maaf input data gagal";
}
?>
