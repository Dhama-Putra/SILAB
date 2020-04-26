<form action="<?= site_url('Latihan/update_user'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Master Data User</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
              <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama</label>
                  <div class="col-lg-7">
                  <input type="hidden" name="id_user" value="<?php echo $tb_user->id_user ?>">
                    <input type="text" placeholder="Masukan Nama Anda" name="nama" class="form-control" value="<?php echo $tb_user->nama; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Password" name="password" class="form-control" value="<?php echo $tb_user->password; ?>">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jabatan</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan jabatan" name="jabatan" class="form-control" value="<?php echo $tb_user->jabatan; ?>">
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

    