<?php
include '../config/koneksi.php';

$kode_supplier = $_POST['kode_supplier'];
$nama_supplier = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];

$query = mysqli_query($koneksi, "INSERT INTO supplier (kode_supplier, nama_supplier, alamat, no_telepon) VALUES ('$kode_supplier', '$nama_supplier', '$alamat', '$no_telepon')") or die (mysqli_error($koneksi));

if ($query){
    echo"<script>alert('Data berhasil ditambahkan');</script>";
    echo"<script>window.location='../supplier';</script>";
}
else {
    echo"<script>alert('Data gagal ditambahkan');</script>";
    echo"<script>window.location='../supplier';</script>";
}
?>
