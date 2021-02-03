<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
            </div>
            <div class="card-body">
                <a href="tambah_data.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th>NO</th>
                        <th>NPM</th>
                        <th>NAMA</th>
                        <th>TEMPAT LHR</th>
                        <th>TANGGAL LHR</th>  
                        <th>JENIS KLMN</th>
                        <th>ALAMAT</th>
                        <th>KODE POS</th>  
                        <th>AKSI</th>
                    </tr>
                    <?php 
                        include "../koneksi.php";
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                        while($data=mysqli_fetch_array($tampil))
                        
                        {
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data['npm']; ?> </td>
                        <td> <?php echo $data['nama']; ?> </td>
                        <td> <?php echo $data['tempatlahir']; ?> </td>
                        <td> <?php echo $data['tanggallahir']; ?> </td>
                        <td> <?php echo $data['jeniskelamin']; ?> </td>
                        <td> <?php echo $data['alamat']; ?> </td>
                        <td> <?php echo $data['kodepos']; ?> </td>
                        <td>
                            <a href="edit_mahasiswa.php?npm=<?php echo $data['npm']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?npm=<?php echo $data['npm']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>

                        <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>
</html>