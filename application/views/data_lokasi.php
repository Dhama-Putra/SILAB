<form action="<?= site_url('Latihan/kirim_lokasi'); ?>" method="POST">
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Master Data Lokasi</h3>
        <!-- BASIC FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form role="form" class="form-horizontal style-form">
              <br>
              <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Lokasi Aset</label>
                  <div class="col-lg-7">
                  <select class="form-control" name="id_prodi">
                        <option >Silakan pilih Prodi</option>
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
                    <input type="text" placeholder="Masukan Nama Lab" name="nama_lab" class="form-control">
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
        <h3><i class="fa fa-angle-right"></i> Tabel Lokasi Prodi</h3>
        <br>
        
        <div class="col-lg-12">
            <div class="content-panel">
            <p>
                <form action="<?= site_url('latihan/search_lokasi'); ?>" method="post">
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
					            <th>Nama Lab</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_lokasi as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->nama_prodi;?></td>
					            <td><?=$val->nama_lab;?></td>
                      <td>
                      <i class="fa fa-pencil"><?php echo anchor('latihan/edit_lokasi/'.$val->id_lokasi,'&nbsp;&nbsp;Edit'); ?></i>
                      </td>
                      <td>
                      <i class="fa fa-trash"><?php echo anchor('latihan/hapus_lokasi/'.$val->id_prodi,'&nbsp;&nbsp;Hapus'); ?></i>	
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

    