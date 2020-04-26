<form action="<?= site_url('Latihan/kirim_user'); ?>" method="POST">
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
                    <input type="text" placeholder="Masukan Nama Anda" name="nama" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Password" name="password" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jabatan</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan jabatan" name="jabatan" class="form-control">
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
        <h3><i class="fa fa-angle-right"></i> Tabel Data User</h3>
        <br>
        
        <div class="col-lg-12">
            <div class="content-panel">
            <p>
                <form action="<?= site_url('latihan/search_user'); ?>" method="post">
                <div class="col-lg-4">
								<input type="text" class="form-control" placeholder="search keyword.."
								name="keyword" autocomplete="off" autofocus>
                </div>
                <input class="btn btn-primary" type="submit" name="search_submit" value="Cari">
								<p>
            <BR>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
					            <th>Password</th>
                      <th>Jabatan</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_user as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->nama;?></td>
					            <td><?=$val->password;?></td>
                      <td><?=$val->jabatan;?></td>
                      <td>
                      <i class="fa fa-pencil"><?php echo anchor('latihan/edit_user/'.$val->id_user,'&nbsp;&nbsp;Edit'); ?></i>
                      </td>
                      <td>
                      <i class="fa fa-trash"><?php echo anchor('latihan/hapus_user/'.$val->id_user,'&nbsp;&nbsp;Hapus'); ?></i>	
                      </td>
                    </tr>
                  <?php } ?>
                </table>
                <?php echo $this->pagination->create_links();?>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>

    