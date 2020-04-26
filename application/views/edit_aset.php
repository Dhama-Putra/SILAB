<form action="<?= site_url('Latihan/update_aset'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Master Data Aset</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
              <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Lokasi Lab</label>
                  <div class="col-lg-8">
                  <input type="hidden" name="kode_aset" value="<?php echo $tb_aset->kode_aset ?>">
                  <select class="form-control" name="id_lokasi">
                        <option value="<?php echo $tb_aset->id_lokasi ?>">Silakan pilih Nama Lab</option>
                            <option value="1">Lab 1 FTK C</option>
                            <option value="2">Lab 2 FTK B</option>
                            <option value="3">Lab Jaringan</option>
                            <option value="6">Lab SI/Ilkom</option>
                            <option value="8">Lab LCI</option>
                            <option value="9">Lab 1 Elektronika</option>
                            <option value="10">Lab 2 Listrik</option>
                            <option value="11">Lab Multimedia</option>
                            <option value="16">Lab Busana</option>
                        </select>
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Barang</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Nama Barang" name="nama_barang" class="form-control" value="<?php echo $tb_aset->nama_barang; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Spesifikasi</label>
                  <div class="col-lg-8">
                    <input type="textarea" placeholder="Masukan Spesifikasi Barang" name="spesifikasi" class="form-control" value="<?php echo $tb_aset->spesifikasi; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jumlah</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Jumlah Barang" name="jumlah" class="form-control" value="<?php echo $tb_aset->jumlah; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Satuan</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Satuan Barang" name="satuan" class="form-control" value="<?php echo $tb_aset->satuan; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Keterangan</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Keterangan" name="keterangan" class="form-control" value="<?php echo $tb_aset->keterangan; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Foto Barang</label>
                  <div class="col-lg-3">
                    <input type="file" readonly="readonly" value="read only" name="foto" value="<?php echo $tb_aset->foto; ?>">
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
            <!-- /content-panel -->
          </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>

    