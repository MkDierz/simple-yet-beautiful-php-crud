<?php
include 'config.php';
$id = $_GET['id'];
$hapus = "DELETE FROM t_dosen WHERE id='$id'";
$hasil = mysqli_query($mysqli, $hapus);
if ($hasil) {
    header("location:index.php");
} else {
    echo "Maaf anda gagal delete";
}
