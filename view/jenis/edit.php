<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    <title></title>
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
    <h1>Data barang Baru</h1>
    <?php
    $id_jenis=$_GET['id_jenis'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn,"SELECT * FROM jenis WHERE id_jenis='$id_jenis' ");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_jenis=<?php echo $result['id_jenis']?>" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class= "form-label">nama_jenis</label>
            <input type="text" class="form-control" value="<?php echo $result['nama_jenis']?>" name="nama_jenis" 
            id="exampleInputEmail" aria-activedescendant="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>