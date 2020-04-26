<form action="<?= site_url('Latihan/kirim_lapor'); ?>" method="POST">
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
                  <div class="col-lg-8">
                  <select class="form-control" name="id_user">
                        <option >Silakan pilih Nama User</option>
                            <option value="1">dhmptr</option>
                            <option value="2">ngurah</option>
                        </select>
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Tanggal Laporan</label>
                  <div class="col-lg-8">
                    <input type="date" placeholder="Masukan Tanggal Pelaporan" name="tgl_lapor" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Deskripsi Laporan</label>
                  <div class="col-lg-8">
                    <input type="textarea" placeholder="Masukan Deskripsi Laporan" name="deskripsi_laporan" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Status</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="status" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Tanggapan</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="" name="tanggapan" class="form-control">
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
        <h3><i class="fa fa-angle-right"></i> Tabel Data Pelaporan</h3>
        <br>
        
        <div class="col-lg-12">
            <div class="content-panel">
            <p>
                <form action="<?= site_url('latihan/search_lapor'); ?>" method="post">
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
                      <th>Nama User</th>
					            <th>Tanggal Lapor</th>
                      <th>Deskripsi Laporan</th>
					            <th>Status</th>
                      <th>Tanggapan</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_pelaporan as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->nama;?></td>
					            <td><?=$val->tgl_lapor;?></td>
                      <td><?=$val->deskripsi_laporan;?></td>
					            <td><?=$val->status;?></td>
                      <td><?=$val->tanggapan;?></td>
                      <td>
                      <i class="fa fa-pencil"><?php echo anchor('latihan/edit_lapor/'.$val->id_laporan,'&nbsp;&nbsp;Edit'); ?></i>
                      </td>
                      <td>
                      <i class="fa fa-trash"><?php echo anchor('latihan/hapus_lapor/'.$val->id_laporan,'&nbsp;&nbsp;Hapus'); ?></i>	
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

    