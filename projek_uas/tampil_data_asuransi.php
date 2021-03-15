<?php
    include "koneksi.php";

    $proses = mysqli_query($koneksi,"SELECT * FROM data_pelanggan") 
    or die (mysqli_error($koneksi))
?>