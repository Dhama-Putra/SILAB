<form action="<?= site_url('Latihan/update_prodi'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Master Data Prodi</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
              <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Prodi</label>
                  <div class="col-lg-7">
                  <input type="hidden" name="id_prodi" value="<?php echo $tb_prodi->id_prodi ?>">
                    <input type="text" placeholder="Masukan Nama Prodi" name="nama_prodi" class="form-control" value="<?php echo $tb_prodi->nama_prodi; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Jurusan</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Nama Jurusan" name="jurusan" class="form-control" value="<?php echo $tb_prodi->jurusan; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Fakultas</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Nama Fakultas" name="fakultas" class="form-control" value="<?php echo $tb_prodi->fakultas; ?>">
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

    