<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan extends CI_Controller{
    function __construct()
    { parent :: __construct();
        $this->load->model('M_latihan');
    }

    function index(){
            $data['title']="Tampilan Beranda";
            $data['meta']="Dhama Putra";
            $data['beranda']="beranda";
        $this->load->view('template',$data);
    }

//function data lokasi start-----------------------------------------------------------------------
    function data_lokasi($page=0){
        $data['title']="Master Data lokasi";
        $config['total_rows']=$this->M_latihan->get_num_rows('tb_lokasi');
        $config['per_page']=5;
        $config['base_url']=site_url('latihan/data_lokasi');
        $data['tb_lokasi']=$this->M_latihan->get_data_lokasi($config['per_page'],$page); 
        $this->pagination->initialize($config);
        $data['beranda']="data_lokasi";
    $this->load->view('template',$data);
    }

    function kirim_lokasi(){ //kirim data
        //mengirim post ke model
        $this->M_latihan->kirim_lokasi($_POST);
        //akses fungsi untuk menampilkan halaman daftar peserta
        redirect('Latihan/data_lokasi');
    }

    function hapus_lokasi($id_prodi){ //hapus data
		$where = array('id_prodi' => $id_prodi);
		$this->M_latihan->hapus_data($where,'tb_lokasi');
		redirect('Latihan/data_lokasi');
	}

    public function edit_lokasi($id_lokasi) { //edit data
     $data['tb_lokasi'] = $this->M_latihan->edit_lokasi($id_lokasi)->row();
     $data['beranda']="edit_lokasi";
     $this->load->view('template',$data);
    }

    function update_lokasi($id_lokasi){ //update data
        $id_lokasi = $this->input->post('id_lokasi');
        $id_prodi = $this->input->post('id_prodi');
        $nama_lab = $this->input->post('nama_lab');
     
        $data = array(
            'id_prodi' => $id_prodi,
            'nama_lab' => $nama_lab
        );
     
        $where = array(
            'id_lokasi' => $id_lokasi
        );
     
        $this->M_latihan->update_data($where,$data,'tb_lokasi');
        redirect('Latihan/data_lokasi');
    }

    public function search_lokasi(){ //search lokasi
        $keyword = $this->input->post('keyword');
        $data['tb_lokasi']=$this->M_latihan->get_data_lokasi_keyword($keyword);
        $data['beranda']="data_lokasi";
        $this->load->view('template',$data);
    }
//function data lokasi end-----------------------------------------------------------------------

//function data aset start-----------------------------------------------------------------------
function data_aset($page=0){
    $data['title']="Master Data aset";
    $config['total_rows']=$this->M_latihan->get_num_rows('tb_aset');
    $config['per_page']=5;
    $config['base_url']=site_url('latihan/data_aset');
    $data['tb_aset']=$this->M_latihan->get_data_aset($config['per_page'],$page); 
    $this->pagination->initialize($config);
    $data['beranda']="data_aset";
$this->load->view('template',$data);
}

function kirim_aset(){ //kirim data
    //mengirim post ke model
    $this->M_latihan->kirim_aset($_POST);
    //akses fungsi untuk menampilkan halaman daftar peserta
    redirect('Latihan/data_aset');
}

function hapus_aset($kode_aset){ //hapus data
    $where = array('kode_aset' => $kode_aset);
    $this->M_latihan->hapus_data($where,'tb_aset');
    redirect('Latihan/data_aset');
}

public function edit_aset($kode_aset) { //edit data
 $data['tb_aset'] = $this->M_latihan->edit_aset($kode_aset)->row();
 $data['beranda']="edit_aset";
 $this->load->view('template',$data);
}

function update_aset($kode_aset){ //update data
    $kode_aset = $this->input->post('kode_aset');
    $id_lokasi = $this->input->post('id_lokasi');
    $nama_barang = $this->input->post('nama_barang');
    $spesifikasi = $this->input->post('spesifikasi');
    $jumlah = $this->input->post('jumlah');
    $satuan = $this->input->post('satuan');
    $keterangan = $this->input->post('keterangan');
    $foto = $this->input->post('foto');
 
    $data = array(
        'id_lokasi' => $id_lokasi,
        'nama_barang' => $nama_barang,
        'spesifikasi' => $spesifikasi,
        'jumlah' => $jumlah,
        'satuan' => $satuan,
        'keterangan' => $keterangan,
        'foto' => $foto
    );
 
    $where = array(
        'kode_aset' => $kode_aset
    );
 
    $this->M_latihan->update_data($where,$data,'tb_aset');
    redirect('Latihan/data_aset');
}

public function search_aset(){ //search lokasi
    $keyword = $this->input->post('keyword');
    $data['tb_aset']=$this->M_latihan->get_data_aset_keyword($keyword);
    $data['beranda']="data_aset";
    $this->load->view('template',$data);
}
//function data aset end-----------------------------------------------------------------------

//function data prodi start-----------------------------------------------------------------------
function data_prodi($page=0){
    $data['title']="Master Data prodi";
    $config['total_rows']=$this->M_latihan->get_num_rows('tb_prodi');
    $config['per_page']=5;
    $config['base_url']=site_url('latihan/data_prodi');
    $data['tb_prodi']=$this->M_latihan->get_data_prodi($config['per_page'],$page); 
    $this->pagination->initialize($config);
    $data['beranda']="data_prodi";
$this->load->view('template',$data);
}

function kirim_prodi(){ //kirim data
    //mengirim post ke model
    $this->M_latihan->kirim_prodi($_POST);
    //akses fungsi untuk menampilkan halaman daftar peserta
    redirect('Latihan/data_prodi');
}

function hapus_prodi($id_prodi){ //hapus data
    $where = array('id_prodi' => $id_prodi);
    $this->M_latihan->hapus_data($where,'tb_prodi');
    redirect('Latihan/data_prodi');
}

public function edit_prodi($id_prodi) { //edit data
 $data['tb_prodi'] = $this->M_latihan->edit_prodi($id_prodi)->row();
 $data['beranda']="edit_prodi";
 $this->load->view('template',$data);
}

function update_prodi($id_prodi){ //update data
    $id_prodi = $this->input->post('id_prodi');
    $nama_prodi = $this->input->post('nama_prodi');
    $jurusan = $this->input->post('jurusan');
    $fakultas = $this->input->post('fakultas');
 
    $data = array(
        'nama_prodi' => $nama_prodi,
        'jurusan' => $jurusan,
        'fakultas' => $fakultas
    );
 
    $where = array(
        'id_prodi' => $id_prodi
    );
 
    $this->M_latihan->update_data($where,$data,'tb_prodi');
    redirect('Latihan/data_prodi');
}

public function search_prodi(){ //search lokasi
    $keyword = $this->input->post('keyword');
    $data['tb_prodi']=$this->M_latihan->get_data_prodi_keyword($keyword);
    $data['beranda']="data_prodi";
    $this->load->view('template',$data);
}
//function data prodi end-----------------------------------------------------------------------

//function data user start-----------------------------------------------------------------------
function data_user($page=0){
    $data['title']="Master Data user";
    $config['total_rows']=$this->M_latihan->get_num_rows('tb_user');
    $config['per_page']=5;
    $config['base_url']=site_url('latihan/data_user');
    $data['tb_user']=$this->M_latihan->get_data_user($config['per_page'],$page); 
    $this->pagination->initialize($config);
    $data['beranda']="data_user";
$this->load->view('template',$data);
}

function kirim_user(){ //kirim data
    //mengirim post ke model
    $this->M_latihan->kirim_user($_POST);
    //akses fungsi untuk menampilkan halaman daftar peserta
    redirect('Latihan/data_user');
}

function hapus_user($id_user){ //hapus data
    $where = array('id_user' => $id_user);
    $this->M_latihan->hapus_data($where,'tb_user');
    redirect('Latihan/data_user');
}

public function edit_user($id_user) { //edit data
 $data['tb_user'] = $this->M_latihan->edit_user($id_user)->row();
 $data['beranda']="edit_user";
 $this->load->view('template',$data);
}

function update_user($id_user){ //update data
    $id_user = $this->input->post('id_user');
    $nama = $this->input->post('nama');
    $password = $this->input->post('password');
    $jabatan = $this->input->post('jabatan');
 
    $data = array(
        'nama' => $nama,
        'password' => $password,
        'jabatan' => $jabatan
    );
 
    $where = array(
        'id_user' => $id_user
    );
 
    $this->M_latihan->update_data($where,$data,'tb_user');
    redirect('Latihan/data_user');
}

public function search_user(){ //search lokasi
    $keyword = $this->input->post('keyword');
    $data['tb_user']=$this->M_latihan->get_data_user_keyword($keyword);
    $data['beranda']="data_user";
    $this->load->view('template',$data);
}
//function data user end-----------------------------------------------------------------------

//function data laporan start-----------------------------------------------------------------------
function data_lapor($page=0){
    $data['title']="Master Data Pelaporan";
    $config['total_rows']=$this->M_latihan->get_num_rows('tb_pelaporan');
    $config['per_page']=5;
    $config['base_url']=site_url('latihan/data_lapor');
    $data['tb_pelaporan']=$this->M_latihan->get_data_lapor($config['per_page'],$page); 
    $this->pagination->initialize($config);
    $data['beranda']="data_lapor";
$this->load->view('template',$data);
}

function kirim_lapor(){ //kirim data
    //mengirim post ke model
    $this->M_latihan->kirim_lapor($_POST);
    //akses fungsi untuk menampilkan halaman daftar peserta
    redirect('Latihan/data_lapor');
}

function hapus_lapor($id_laporan){ //hapus data
    $where = array('id_laporan' => $id_laporan);
    $this->M_latihan->hapus_data($where,'tb_pelaporan');
    redirect('Latihan/data_lapor');
}

public function edit_lapor($id_laporan) { //edit data
 $data['tb_pelaporan'] = $this->M_latihan->edit_lapor($id_laporan)->row();
 $data['beranda']="edit_lapor";
 $this->load->view('template',$data);
}

function update_lapor($id_laporan){ //update data
    $id_laporan = $this->input->post('id_laporan');
    $id_user = $this->input->post('id_user');
    $tgl_lapor = $this->input->post('tgl_lapor');
    $deskripsi_laporan = $this->input->post('deskripsi_laporan');
    $status = $this->input->post('status');
    $tanggapan = $this->input->post('tanggapan');
 
    $data = array(
        'id_user' => $id_user,
        'tgl_lapor' => $tgl_lapor,
        'deskripsi_laporan' => $deskripsi_laporan,
        'status' => $status,
        'tanggapan' => $tanggapan
    );
 
    $where = array(
        'id_laporan' => $id_laporan
    );
 
    $this->M_latihan->update_data($where,$data,'tb_pelaporan');
    redirect('Latihan/data_lapor');
}

public function search_lapor(){ //search lokasi
    $keyword = $this->input->post('keyword');
    $data['tb_pelaporan']=$this->M_latihan->get_data_lapor_keyword($keyword);
    $data['beranda']="data_lapor";
    $this->load->view('template',$data);
}
//function data laporan end-----------------------------------------------------------------------

}?>