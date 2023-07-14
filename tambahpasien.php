<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
    <link rel="icon" href="pics/logo.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body style="height:100vh" background="pics/bac.jpg">
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6 col-md-8">
      <div class="card shadow">
        <div class="card-body">
          <h3>Tambah Data Pasien</h3>
          <form action="koneksi.php" method="POST">
            <div class="form-group">
              <label for="idPasien">ID Pasien</label>
              <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
            </div>
            <div class="form-group">
              <label for="nmPasien">Nama Pasien</label>
              <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien">
            </div>
            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="jk" value="perempuan"> Perempuan
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="jk" value="laki-laki"> Laki-laki
              </div>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="status" value="positif"> Positif
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" name="status" value="negatif"> Negatif
              </div>
            </div>
            <div class="form-group">
              <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- <div class="h-100 d-flex justify-content-center align-items-center">
        <div class="col-3">
            <div class="card shadow">
                <div class="card-body">
                <h3>Tambah Data Pasien</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>
                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="perempuan"> Perempuan
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="laki-laki"> Laki-laki
                        </div>
                        <div class="form-group mt-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="alamat"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="jk">Status</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" value="positif"> Positif
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="status" value="negatif"> Negatif
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>