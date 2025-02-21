<?php

$id_jenis = $_POST['id_jenis'];
$nama_barang = $_POST['nama_barang'];

include '../../config/koneksi.php';

$query = mysqli_query(mysql: $conn,query: "INSERT INTO jenis VALUES ('$id_jenis','$nama_barang')");

if($query){
    echo"<script>alert('Tambah Berhasil')</script>";
    echo"<script>window.location.href='index.php'</script>";
}
 else{
    echo "<script>alert('Tambah Gagal')</script>";
    echo"<script>window.location.href='tambah.php'</script>";
}
