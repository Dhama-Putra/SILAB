<form action="<?= site_url('Latihan/update_lapor'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Master Data Pelaporan</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
              <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama User</label>
                  <form action="" method="POST" id_laporan="edit_lapor">
                  <div class="col-lg-8">
                  <input type="hidden" name="id_laporan" value="<?php echo $tb_pelaporan->id_laporan ?>">
                  <select class="form-control" name="id_user">
                        <option value="<?php echo $tb_pelaporan->id_user ?>">Silakan pilih Nama User</option>
                            <option value="1">dhmptr</option>
                            <option value="2">ngurah</option>
                        </select>
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Tanggal Laporan</label>
                  <div class="col-lg-8">
                    <input type="date" placeholder="Masukan Tanggal Pelaporan" name="tgl_lapor" class="form-control" value="<?php echo $tb_pelaporan->tgl_lapor; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Deskripsi Laporan</label>
                  <div class="col-lg-8">
                    <input type="textarea" placeholder="Masukan Deskripsi Laporan" name="deskripsi_laporan" class="form-control" value="<?php echo $tb_pelaporan->deskripsi_laporan; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Status</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="status" class="form-control" value="<?php echo $tb_pelaporan->status; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Tanggapan</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="tanggapan" class="form-control" value="<?php echo $tb_pelaporan->tanggapan; ?>">
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
            </div>
            <!-- /content-panel -->
          </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>

    