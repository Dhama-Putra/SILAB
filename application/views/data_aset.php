<form action="<?= site_url('Latihan/kirim_aset'); ?>" method="POST">
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
                  <label class="col-lg-2 control-label">Lokasi Aset</label>
                  <div class="col-lg-8">
                  <select class="form-control" name="id_lokasi">
                        <option >Silakan pilih Nama Lab</option>
                            <option value="1">Lab 1 FTK C</option>
                            <option value="2">Lab 2 FTK B</option>
                            <option value="3">Lab Jaringan</option>
                        </select>
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Nama Barang</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Nama Barang" name="nama_barang" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Spesifikasi</label>
                  <div class="col-lg-8">
                    <input type="textarea" placeholder="Masukan Spesifikasi Barang" name="spesifikasi" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Jumlah</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Jumlah Barang" name="jumlah" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Satuan</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Satuan Barang" name="satuan" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Keterangan</label>
                  <div class="col-lg-8">
                    <input type="text" placeholder="Masukan Keterangan" name="keterangan" class="form-control">
                  </div>
                </div>
                <br><br>
                <div class="form-group has-success">
                  <label class="col-lg-2 control-label">Foto Barang</label>
                  <div class="col-lg-3">
                    <input type="file" readonly="readonly" value="read only" name="foto" >
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
        <h3><i class="fa fa-angle-right"></i> Tabel Data Aset</h3>
        <br>
        
        <div class="col-lg-12">
            <div class="content-panel">
            <p>
                <form action="<?= site_url('latihan/search_aset'); ?>" method="post">
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
                      <th>Nama Lokasi</th>
					            <th>Nama Barang</th>
                      <th>Spesifikasi</th>
					            <th>Jumlah</th>
                      <th>Satuan</th>
					            <th>Keterangan</th>
                      <th>Foto</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  foreach($tb_aset as $val){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?=$val->nama_lab;?></td>
					            <td><?=$val->nama_barang;?></td>
                      <td><?=$val->spesifikasi;?></td>
					            <td><?=$val->jumlah;?></td>
                      <td><?=$val->satuan;?></td>
					            <td><?=$val->keterangan;?></td>
                      <td><img width='100' src="<?=base_url('media/images/'.$val->foto);?>"></td>
                      <td>
                      <i class="fa fa-pencil"><?php echo anchor('latihan/edit_aset/'.$val->kode_aset,'&nbsp;&nbsp;Edit'); ?></i>
                      </td>
                      <td>
                      <i class="fa fa-trash"><?php echo anchor('latihan/hapus_aset/'.$val->kode_aset,'&nbsp;&nbsp;Hapus'); ?></i>	
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

    