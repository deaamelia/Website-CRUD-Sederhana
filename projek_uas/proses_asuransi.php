<?php

    include "koneksi.php";


    $noinduk=$_POST['nik'];
    $nama=$_POST['nama'];
    $jeniskelamin=$_POST['jk'];
    $tgl_lahir=$_POST['ttl'];
    $pkrjn=$_POST['pekerjaan'];
    $almt=$_POST['alamat'];
    $no_hp=$_POST['nohp'];
    $jenis_asuransi=$_POST['jenis'];
    $perusahaan_asuransi=$_POST['perusahaan'];
    $tgl_pengajuan=$_POST['tglpengajuan'];
    

    $proses= mysqli_query($koneksi,"INSERT INTO data_pelanggan (nik, nama, jk, ttl, 
                                    pekerjaan, alamat, no_hp, jenis_asuransi, perusahaan_asuransi, tgl_pengajuan) 
                                    VALUES (".$noinduk.",'".$nama."','".$jeniskelamin."',
                                    '".$tgl_lahir."','".$pkrjn."','".$almt."','".$no_hp."','".$jenis_asuransi."',
                                    '".$perusahaan_asuransi."','".$tgl_pengajuan."')" )
    or die (mysqli_error($koneksi));
    
    if($proses){
        echo"<script> 
        alert ('Data Berhasil Disimpan'); 
        window.location.href='aplikasi_asuransi.php';
        </script>";
    } else  echo"<script>
     alert ('Data Gagal Disimpan'); 
     window.location.href='aplikasi_asuransi.php';
     </script>";


   

    

    
?>