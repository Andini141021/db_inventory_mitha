<?php

$id_barang=$_GET['id_barang'];
$nama_barang=$_POST['nama_barang'];
$id_jenis=$_POST['id_jenis'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

include '../../config/koneksi.php';

$query=mysqli_query($conn,"UPDATE jenis SET nama_jenis='$nama_jenis'
WHERE id_jenis='$id_jenis'");

if($query){
    echo"<script>alert('Edit berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}
 else{
    echo "<script>alert('Edit Gagal')</script>";
    echo"<script>window.location.href='tambah.php'</script>";
}
