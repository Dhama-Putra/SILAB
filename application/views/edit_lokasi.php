<form action="<?= site_url('Latihan/update_lokasi'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Update Data Lokasi</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Lokasi Aset</label>
                  <form action="" method="POST" id_lokasi="edit_lokasi">
                  <div class="col-lg-7">
                  <input type="hidden" name="id_lokasi" value="<?php echo $tb_lokasi->id_lokasi ?>">
                  <select class="form-control" name="id_prodi">
                  <option value="<?php echo $tb_lokasi->id_prodi ?>">Silakan Pilih Prodi</option>
                            <option value="1">Manajemen Informatika</option>
                            <option value="2">Ilmu Komputer</option>
                            <option value="3">Sistem informasi</option>
                            <option value="4">Pendidikan Teknik Informatika</option>
                            <option value="5">Pendidikan Teknik Elektro</option>
                            <option value="6">Teknik Elektro</option>
                            <option value="7">Pendidikan Teknik Mesin</option>
                            <option value="8">Pendidikan Kesejahtraan Keluarga</option>
                        </select>
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Lab Prodi</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="" class="form-control" name="nama_lab" value="<?php echo $tb_lokasi->nama_lab; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>
                </form>
                <br><br>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>

    