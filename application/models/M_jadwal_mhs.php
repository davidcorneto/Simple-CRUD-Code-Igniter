<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class m_jadwal_mhs extends CI_Model {

    public function getjadwalmhs(){
      $sql = $this->db->query("select * from jadwal_mhs");
      return $sql ;
    }

    function simpan($data){
      $this->db->insert('jadwal_mhs',$data);
    }
  }

?>
