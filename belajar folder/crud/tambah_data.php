<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM">
                    </div> 
 
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempatlahir">Tmpt Lahir</label>
                        <input type="text" name="tempatlahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggallahir">Tgl Lahir</label>
                        <input type="date" name="tanggallahir" class="form-control col-md-9" placeholder="Masukkan Tgl Lahir">
                    </div>
                    <div class="form-group row">
				
				</div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <input type="radio" name="jeniskelamin" value="L" class="form-control col-md-9" checked>laki laki
                        <input type="radio" name="jeniskelamin" value="P" class="form-control col-md-9">perempuan
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="nama">Kodepos</label>
                        <input type="number" name="kodepos" class="form-control col-md-9" placeholder="Masukkan Kodepos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "../koneksi.php";
        if(isset($_POST['simpan']))
        {
            $npm              = $_POST['npm'];
            $nama             = $_POST['nama'];
            $tempatlahir      = $_POST['tempatlahir'];
            $tanggallahir     = $_POST['tanggallahir'];
            $jeniskelamin     = $_POST['jeniskelamin'];
            $alamat           = $_POST['alamat'];
            $kodepos          = $_POST['kodepos'];

            mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('',
                '$npm', '$nama','$tempatlahir', '$tanggallahir', '$jeniskelamin', '$alamat', '$kodepos'
            )") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan.... </h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web_uas/crud/data_mahasiswa.php'>";
        }
?>