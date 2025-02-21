<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<body><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" nama="Barang"href="../Barang/index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Jenis/index.php">Jenis</a>
        </li>
        </ul>
    </div>
  </div>
</nav>
<div class="container">
    <h1>Data barang</h1>
    <a href="tambah.php" class="btn btn-info">Tambah data baru</a>
    <table  class="table table-striped table-hover">
  <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">id_Jenis</th>
        <th scope="col">nama_barang</th>
        <th scope="col">aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $queery = mysqli_query($conn,"SELECT * FROM jenis");
            $no=1;
            if(mysqli_num_rows($queery)){
              echo "";
            while($result=mysqli_fetch_assoc($queery)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_jenis']?></td>
                    <td><?php echo $result['nama_jenis']?></td>
                    <td>
                    <a href="edit.php?id_jenis=<?php echo $result['id_jenis']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                    <a href="hapus.php?id_jenis=<?php echo $result['id_jenis']?>"
                    onclick="return confirm('kamu yakin mau hapus barang ?')"
                    class ="btn btn-danger"><i class="fa-solid fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
        }else{
            echo "Data kosong";
        }
        ?>
    </table>
</body>
</html>