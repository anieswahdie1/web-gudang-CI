<?php

class M_login extends CI_Model{

	///untuk menambhakan user baru
  public function insert($tabel,$data){
    $this->db->insert($tabel,$data);
  }

  public function cek_username($tabel,$username){
    return $this->db->select('username')
             ->from($tabel)
             ->where('username',$username)
             ->get()->result();
  }

	//untuk mengecek apakah ada user dengan yang sama diketikkan
  public function cek_user($tabel,$username){
    return  $this->db->select('*')
               ->from($tabel)
               ->where('username',$username)
               ->get();
  }

	//fungsi untuk mengganti gambar
  public function idgambar($username)
  {
    $query = $this->db->select()
                      ->from('user')
                      ->where('username',$username)
                      ->get()->row();
    return $query->id;
  }

	///fungsi untuk mengedit user
  function edit_user($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('user', $data);
	}


}


 ?>
