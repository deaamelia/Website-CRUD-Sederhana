<?php
   include "koneksi.php";

   $noinduk=$_GET['nik'];

   $proses = mysqli_query($koneksi,"DELETE FROM data_pelanggan WHERE nik=$noinduk") 
   or die (mysqli_error($koneksi));


   if($proses){

    echo"<script> 
    alert ('Data Berhasil Dihapus'); 
    window.location.href='aplikasi_asuransi.php';
    </script>";


    } else  echo"<script>
            alert ('Data Gagal Dihapus'); 
            window.location.href='aplikasi_asuransi.php';
            </script>";
?>