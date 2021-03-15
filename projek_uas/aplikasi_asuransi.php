<?php
  include "tampil_data_asuransi.php";
  include "edit_data_asuransi.php";

  $data_edit= mysqli_fetch_assoc($proses_ambil);

?>

<html>
    <header>
        <title>
            APLIKASI ASURANSI
        </title>
        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </header>

    <style>
        h1{color: #955123   ; 
        font-family: "Palatino Linotype", "Book Antiqua", serif; 
         text-align:center;}

         h3{
            text-align:center;
            color:#013467;
         }

         h4{ 
        font-family: "MS Gothic", monospace;
         text-align:left;
         padding-left: 1.8em }
    </style>

        <body  style="background-color:#ECCCB7;"> 

        <h1> APLIKASI PENGAJUAN ASURANSI </h1>
        <hr>
        </hr>
        <br>
        <h4 style="text-align:left;" @nbsp;>  Aplikasi Pengajuan Asuransi merupakan aplikasi yang digunakan oleh perusahaan untuk mengelola data client 
            yang ingin mendaftarkan dirinya ke pihak asuransi. Kami disini  bertindak sebagai phak ketiga yang 
            mengubungkan antara client dengan perusahaan asuransi.</h4>
        
        <style>
        .tengah{position: relative;
                margin: auto;
                left:0; right:0; top:0; bottom:0;  
                width:500px; height:800px;}

        
    </style>

        <br>
       
                     <!-- validation -->
                     <div class="row-fluid"   >
                         <!-- block -->
                        <div class="block"  style="background-color:#D7E1ED; ">
                            
                            <div class="navbar navbar-inner block-header" >
                    </style>
                                <div class="muted pull-left"> <a href="tampilan_awal.php"> < Kembali ke Halaman Awal </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="tengah" >

                                <?php
                                      if($_GET['nik'] != ''){
                                      //proses edit data
                                ?>
                                  
                                  <form action="edit_data_asuransi.php?id=<?php echo $data_edit['nik']?>&proses=1" method="POST" class="form-horizontal">
                                <?php
                                      } else {
                                ?>

                    <!-- BEGIN FORM-->
                  

					<form action="proses_asuransi.php" method="POST" class="form-horizontal"   >
                            <?php
                                      } 
                                ?>

						<fieldset>

                            
							

                            <h3 >    PENDAFTARAN ASURANSI </h3>
                            <hr>
                                    </hr>
                            
                            <br>
                            <div class="control-group">
  								<label class="control-label" style="color:#376690;">Nomor Identitas(NIK)<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="nik" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['nik'] != "")  echo $data_edit['nik'];?> "/>
  								</div>
                              </div>

  							<div class="control-group">
  								<label class="control-label"  style="color:#376690;" >Nama Pemohon<span class="required">*</span></label>
  								<div class="controls">
                                      <input type="text" name="nama" data-required="1" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['nama'] != "")  echo $data_edit['nama'];?> "/>
  								</div>
  							</div>
  							
                              
                              <div class="control-group">
  								<label class="control-label" style="color:#376690;">Jenis Kelamin<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="jk" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['jk'] != "")  echo $data_edit['jk'];?> "/>
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label" style="color:#376690;">Tempat/Tanggal Lahir<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="ttl" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['ttl'] != "")  echo $data_edit['ttl'];?> "/>
  									<span class="help-block">contoh. Jakarta, 10 Januari 1999</span>
  								</div>
                              </div>
                              
                              <div class="control-group">
  								<label class="control-label" style="color:#376690;">Pekerjaan<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="pekerjaan" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['pekerjaan'] != "")  echo $data_edit['pekerjaan'];?> "/>
  								</div>
                              </div>

                            

                              <div class="control-group">
  								<label class="control-label" style="color:#376690;">Alamat<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="alamat" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['alamat'] != "")  echo $data_edit['alamat'];?> " />
  								</div>
                              </div>

  							<div class="control-group">
  								<label class="control-label" style="color:#376690;">No HP<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="nohp" type="text"  class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['no_hp'] != "")  echo $data_edit['no_hp'];?> " />
  								</div>
                              </div>
                              
  						
  							<div class="control-group">
  								<label class="control-label" style="color:#376690;">Jenis Asuransi Yang Diajukan<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="jenis" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['jenis_asuransi'] != "")  echo $data_edit['jenis_asuransi'];?> "/>
  									<span class="help-block">contoh. Asuransi Kesehatan, Mobil, Jiwa dsb.</span>
  								</div>
                              </div>
                              
                              <div class="control-group">
  								<label class="control-label" style="color:#376690;">Perusahaan Asuransi Yang Dituju<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="perusahaan" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['perusahaan_asuransi'] != "")  echo $data_edit['perusahaan_asuransi'];?> "/>
  									<span class="help-block">contoh. Prudential, BNI Life, AIA Financial</span>
  								</div>
                              </div>
                              
                              <div class="control-group">
  								<label class="control-label" style="color:#376690;">Tanggal Pengajuan<span class="required">*</span></label>
  								<div class="controls">
                                      <input name="tglpengajuan" type="text" class="span12 m-wrap" style="background-color:#FAEFDE;"
                                      value="<?php if($data_edit ['tgl_pengajuan'] != "")  echo $data_edit['tgl_pengajuan'];?> "/>
                                      <span class="help-block">contoh. 2020-06-08</span>
  								</div>
                              </div>

  							
  							
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Simpan</button>
  								<button type="reset" class="btn">Batal</button>
  							</div>
						</fieldset>
					</form>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
                     <!-- /validation -->


               
      

<div class="row-fluid">
                        <!-- block -->
                        <div class="block" style="background-color:#DFD1DE">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"> Table Pendaftar</div>
                            </div>
                            <br>
                            <p style="padding-left: 1.8em"> Jika telah mendaftar, data-data pengajuan asuransi akan tampil pada tabel dibawah ini: </p>
                            <div class="block-content collapse in"  style="background-color:#EBDEDE">
                                <div class="span12">
  									<table class="table table-bordered" >

                                      <div class="row-fluid" >
                        

						              <thead>
						                <tr>
						                  <th>NIK</th>
						                  <th>Nama</th>
						                  <th>Jenis Kelamin</th>
                                          <th>TTL</th>
                                          <th>Pekerjaan</th>
                                          <th>Alamat</th>
                                          <th>No HP</th>
                                          <th>Jenis Asuransi</th>
                                          <th>Perusahaan Asuransi</th>
                                          <th>Tanggal Pengajuan</th>
                                          <th>Aksi</th>
						                </tr>
						              </thead>
						              <tbody>

                                        <?php
                                          while($data = mysqli_fetch_assoc($proses)){

                                
                                        ?>

						                   <tr>
						                  <td><?php echo $data['nik']  ?></td>
						                  <td><?php echo $data['nama']  ?></td>
                                          <td><?php echo $data['jk']  ?></td>
						                  <td><?php echo $data['ttl']  ?></td>
						                  <td><?php echo $data['pekerjaan']  ?></td>
                                          <td><?php echo $data['alamat']  ?></td>
						                  <td><?php echo $data['no_hp']  ?></td>
						                  <td><?php echo $data['jenis_asuransi']  ?></td>
                                          <td><?php echo $data['perusahaan_asuransi']  ?></td>
                                          <td><?php echo $data['tgl_pengajuan']  ?></td>

						                  <td> <a class="btn btn-primary" href="aplikasi_asuransi.php?nik=<?php echo $data['nik']  ?>"> 
                                              <i class="icon-pencil icon-white"></i> Edit  </a>
                                             <a class="btn btn-danger" href="hapus_data_asuransi.php?nik=<?php echo $data['nik']  ?>"> 
                                             <i class="icon-remove icon-white"></i> Hapus  </a>  
                                          </td>
                            </tr>
                                        
                                        <?php
                                          }
                                        ?>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                    </div>
            </div>
            <hr>
            <footer>
                <p><b> &copy; Dea Amelia-1810631170151</b></p>
            </footer>
        </div>

</body>