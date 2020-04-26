<form action="<?= site_url('Latihan/kirim_prodi'); ?>" method="POST">
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
                    <input type="text" placeholder="Masukan Nama Prodi" name="nama_prodi" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Jurusan</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Nama Jurusan" name="jurusan" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Fakultas</label>
                  <div class="col-lg-7">
                    <input type="text" placeholder="Masukan Nama Fakultas" name="fakultas" class="form-control">
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
        <h3><i class="fa fa-angle-right"></i> Tabel Data Prodi</h3>
        <br>
        
        <div class="col-lg-12">
            <div class="content-panel">
            <p>
                <form action="<?= site_url('latihan/search_prodi'); ?>" method="post">
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
                      <th>Nama Prodi</th>
					            <th>jurusan</th>
                      <th>fakultas</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_prodi as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->nama_prodi;?></td>
					            <td><?=$val->jurusan;?></td>
                      <td><?=$val->fakultas;?></td>
                      <td>
                      <i class="fa fa-pencil"><?php echo anchor('latihan/edit_prodi/'.$val->id_prodi,'&nbsp;&nbsp;Edit'); ?></i>
                      </td>
                      <td>
                      <i class="fa fa-trash"><?php echo anchor('latihan/hapus_prodi/'.$val->id_prodi,'&nbsp;&nbsp;Hapus'); ?></i>	
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

    