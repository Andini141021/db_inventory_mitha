<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    <title></title>
</head>
<body>
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
        <th scope="col">id_barang</th>
        <th scope="col">nama_barang</th>
        <th scope="col">id_jenis</th>
        <th scope="col">harga</th>
        <th scope="col">stok</th>
        <th scope="col">aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $queery = mysqli_query(mysql:$conn,query:"SELECT * FROM barang");
            $no=1;
            if(mysqli_num_rows($queery)){
              echo"";
            while($result=mysqli_fetch_assoc($queery)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_barang']?></td>
                    <td><?php echo $result['nama_barang']?></td>
                    <td><?php echo $result['id_jenis']?></td>
                    <td><?php echo $result['harga']?></td>
                    <td><?php echo $result['stok']?></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class ="btn btn-danger">Hapus</a>
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