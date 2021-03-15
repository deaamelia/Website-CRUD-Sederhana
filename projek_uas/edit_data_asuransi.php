<?php

error_reporting(0);

    include "koneksi.php";

    $noinduk = $_GET['nik'];
    $apakah_proses= $_GET['proses'];
    


    $proses_ambil= mysqli_query($koneksi, "SELECT * FROM data_pelanggan WHERE nik = '".$noinduk."'")
                   or die (mysqli_error($koneksi));
   
    
                   if( $apakah_proses== 1){
                    $noinduk=$_POST['nik'];
                    $nama=$_POST['nama'];
                    $jeniskelamin=$_POST['jk'];
                    $tgl_lahir=$_POST['ttl'];
                    $pkrjn=$_POST['pekerjaan'];
                    $almt=$_POST['alamat'];
                    $nomor_hp=$_POST['nohp'];
                    $jns_asuransi=$_POST['jenis'];
                    $perusahaan_as=$_POST['perusahaan'];
                    $tgl_aju=$_POST['tglpengajuan'];

            
                    $proses_update_data = mysqli_query($koneksi, "UPDATE  data_pelanggan SET nik = '$noinduk', 
                                                                 nama= '$nama', jk = '$jeniskelamin', 
                                                                 ttl= '$tgl_lahir', pekerjaan = '$pkrjn', 
                                                                 alamat= '$almt', no_hp = '$nomor_hp', 
                                                                 jenis_asuransi= '$jns_asuransi', 
                                                                 perusahaan_asuransi = '$perusahaan_as', 
                                                                 tgl_pengajuan= '$tgl_aju' WHERE nik = '".$noinduk."'")
                    or die (mysqli_error($koneksi));
            
                    if($proses_update_data){
                        echo"<script> 
                        alert ('Data Berhasil Diupdate'); 
                        window.location.href='aplikasi_asuransi.php';
                        </script>";
            
                    } else  echo"<script>
                     alert ('Data Gagal Diupdate'); 
                     window.location.href='aplikasi_asuransi.php';
                     </script>";
            
                }

?>