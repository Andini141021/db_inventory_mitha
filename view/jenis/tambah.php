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
    <h1>Data barang Baru</h1>
    <form action="simpan.php" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class= "form-label">id_Jenis</label>
            <input type="number" class="form-control" name="id_Jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class= "form-label">nama_barang</label>
            <input type="text" class="form-control" name="nama_barang" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>