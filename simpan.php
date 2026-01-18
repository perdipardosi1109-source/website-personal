<?php
include "koneksi.php";

$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl    = $_POST['tgl_lahir'];
$jk     = $_POST['jk'];
$agama  = $_POST['agama'];
$asal   = $_POST['asal'];
$email  = $_POST['email'];

$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

if ($foto != "") {
    move_uploaded_file($tmp, "foto/".$foto);
}

$query = "INSERT INTO mahasiswa 
(nama_lengkap, alamat, tanggal_lahir, jenis_kelamin, agama, asal_sekolah, email, foto)
VALUES
('$nama','$alamat','$tgl','$jk','$agama','$asal','$email','$foto')";

mysqli_query($koneksi, $query);

echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
?>
