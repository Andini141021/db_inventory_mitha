<?php

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_Jenis = $_POST['id_Jenis'];
$Harga = $_POST['Harga'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query(mysql: $conn,query: "INSERT INTO barang VALUES ('$id_barang','$nama_barang','$id_Jenis','$Harga','$stok')");

if($query){
    echo"<script>alert('Tambah Berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}
 else{
    echo "<script>alert('Tambah Gagal')</script>";
    echo"<script>window.location.href='tambah.php'</script>";
}
