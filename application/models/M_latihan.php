<?php
class M_latihan extends CI_Model{

    function cek_login($table, $where){ //sesion login
        return $this->db->get_where($table, $where);
    }

//function data lokasi start-----------------------------------------------------------------------
    function get_data_lokasi($limit, $page){
        $this->db->limit($limit, $page);
        $this->db->join('tb_prodi','tb_lokasi.id_prodi=tb_prodi.id_prodi');
        $data=$this->db->get('tb_lokasi')->result();
        return $data;
    } 

    function kirim_lokasi($post){ //kirim lokasi
        $data = array(
            'id_prodi'=>$post['id_prodi'],
            'nama_lab'=>$post['nama_lab'],
        );   
        $this->db->insert('tb_lokasi',$data);
    }

    public function edit_lokasi($id_lokasi){ //edit lokasi
        $this->db->select('*');
        $this->db->from('tb_lokasi');
        $this->db->where('id_lokasi', $id_lokasi);
   
        return $this->db->get();
       }
    
    public function get_data_lokasi_keyword($keyword){ //search lokasi
        $this->db->join('tb_prodi','tb_lokasi.id_prodi=tb_prodi.id_prodi');
        $this->db->from('tb_lokasi');
        $this->db->like('nama_prodi',$keyword);
        $this->db->or_like('nama_lab',$keyword);
        return $this->db->get()->result();
    }
//function data lokasi end-----------------------------------------------------------------------

//function data aset start-----------------------------------------------------------------------
function get_data_aset($limit, $page){
    $this->db->limit($limit, $page);
    $this->db->join('tb_lokasi','tb_aset.id_lokasi=tb_lokasi.id_lokasi');
    $data=$this->db->get('tb_aset')->result();
    return $data;
} 

function kirim_aset($post){ //kirim lokasi
    $konfigurasi = array(
        'allowed_types' => 'jpg|jpeg|gif|png|bmp',
        'upload_path' => realpath('media/images'),
        'max_size' =>1024 
    );
    $this->load->library('upload',$konfigurasi);
    $this->upload->do_upload('foto');
    $data = array(
        'id_lokasi'=>$post['id_lokasi'],
        'nama_barang'=>$post['nama_barang'],
        'spesifikasi'=>$post['spesifikasi'],
        'jumlah'=>$post['jumlah'],
        'satuan'=>$post['satuan'],
        'keterangan'=>$post['keterangan'],
        'foto'=>$post['foto'],
    );   
    $this->db->insert('tb_aset',$data);
}

public function edit_aset($kode_aset){ //edit lokasi
    $this->db->select('*');
    $this->db->from('tb_aset');
    $this->db->where('kode_aset', $kode_aset);

    return $this->db->get();
   }

public function get_data_aset_keyword($keyword){ //search lokasi
    $this->db->join('tb_lokasi','tb_aset.id_lokasi=tb_lokasi.id_lokasi');
    $this->db->from('tb_aset');
    $this->db->like('nama_lab',$keyword);
    $this->db->or_like('nama_barang',$keyword);
    return $this->db->get()->result();
}
//function data aset end-----------------------------------------------------------------------

//function data prodi start-----------------------------------------------------------------------
function get_data_prodi($limit, $page){
    $this->db->limit($limit, $page);
    $data=$this->db->get('tb_prodi')->result();
    return $data;
} 

function kirim_prodi($post){ //kirim lokasi
    $data = array(
        'nama_prodi'=>$post['nama_prodi'],
        'jurusan'=>$post['jurusan'],
        'fakultas'=>$post['fakultas'],
    );   
    $this->db->insert('tb_prodi',$data);
}

public function edit_prodi($id_prodi){ //edit lokasi
    $this->db->select('*');
    $this->db->from('tb_prodi');
    $this->db->where('id_prodi', $id_prodi);

    return $this->db->get();
   }

public function get_data_prodi_keyword($keyword){ //search lokasi
    $this->db->select('*');
    $this->db->from('tb_prodi');
    $this->db->like('nama_prodi',$keyword);
    $this->db->or_like('jurusan',$keyword);
    $this->db->or_like('fakultas',$keyword);
    return $this->db->get()->result();
}
//function data prodi end-----------------------------------------------------------------------

//function data user start-----------------------------------------------------------------------
function get_data_user($limit, $page){
    $this->db->limit($limit, $page);
    $data=$this->db->get('tb_user')->result();
    return $data;
} 

function kirim_user($post){ //kirim lokasi
    $data = array(
        'nama'=>$post['nama'],
        'password'=>$post['password'],
        'jabatan'=>$post['jabatan'],
    );   
    $this->db->insert('tb_user',$data);
}

public function edit_user($id_user){ //edit lokasi
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->where('id_user', $id_user);

    return $this->db->get();
   }

public function get_data_user_keyword($keyword){ //search lokasi
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->like('nama',$keyword);
    $this->db->or_like('jabatan',$keyword);
    return $this->db->get()->result();
}
//function data user end-----------------------------------------------------------------------

//function data lapor start-----------------------------------------------------------------------
function get_data_lapor($limit, $page){
    $this->db->limit($limit, $page);
    $this->db->join('tb_user','tb_pelaporan.id_user=tb_user.id_user');
    $data=$this->db->get('tb_pelaporan')->result();
    return $data;
} 

function kirim_lapor($post){ //kirim lokasi
    $data = array(
        'id_user'=>$post['id_user'],
        'tgl_lapor'=>$post['tgl_lapor'],
        'deskripsi_laporan'=>$post['deskripsi_laporan'],
        'status'=>$post['status'],
        'tanggapan'=>$post['tanggapan'],
    );   
    $this->db->insert('tb_pelaporan',$data);
}

public function edit_lapor($id_laporan){ //edit lokasi
    $this->db->select('*');
    $this->db->from('tb_pelaporan');
    $this->db->where('id_laporan', $id_laporan);

    return $this->db->get();
   }

public function get_data_lapor_keyword($keyword){ //search lokasi
    $this->db->join('tb_user','tb_pelaporan.id_user=tb_user.id_user');
    $this->db->from('tb_pelaporan');
    $this->db->like('nama',$keyword);
    $this->db->or_like('status',$keyword);
    return $this->db->get()->result();
}
//function data lapor end-----------------------------------------------------------------------


    function hapus_data($where,$table){ //hapus data
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table){ //update data
		$this->db->where($where);
		$this->db->update($table,$data);
    }	

    function get_num_rows($table){ //pagination
        $data=$this->db->get($table)->num_rows();
        return $data;
    }
}?>
