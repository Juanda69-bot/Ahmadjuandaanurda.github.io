<?php
    include "../koneksi.php";
    $id = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE npm='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web_uas/crud/data_mahasiswa.php'>";
?>