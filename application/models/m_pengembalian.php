<?php
  class M_pengembalian extends CI_Model
  {

    function get_data($table)
    {
      return $this->db->get($table);
    }

    function insert_data($data, $table)
    {
      $this->db->insert($table, $data);
    }

    function delete_data($where, $table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }

    function get_where_data($where,$table){
      return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }
  }

?>
