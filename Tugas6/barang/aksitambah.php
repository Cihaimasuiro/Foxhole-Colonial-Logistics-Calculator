<?php
include '../config/koneksi.php';

$no_barcode = $_POST['no_barcode'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = mysqli_query($koneksi, "INSERT INTO barang (no_barcode, nama_barang, harga, stok) VALUES ('$no_barcode', '$nama_barang', '$harga', '$stok')") or die (mysqli_error($koneksi));

if ($query){
    echo"<script>alert('Data berhasil ditambahkan');</script>";
    echo"<script>window.location='../barang';</script>";
}
else {
    echo"<script>alert('Data gagal ditambahkan');</script>";
    echo"<script>window.location='../barang';</script>";
}
?>
