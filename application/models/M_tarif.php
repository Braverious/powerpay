<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Class tarifModel
 *
 * @description Model untuk manajemen data tarif
 *
 * @package     Models
 * @subpackage  tarifModel
 * @category    Model
 */
class M_tarif extends CI_Model
{
  public function create_tarif($data)
  {
    return $this->db->insert('tarif', $data);
  }

  public function get_tarif_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('tarif');
    $this->db->where(array('id_tarif' => $id));
    $query = $this->db->get();
    return $query->row();
  }

  public function get_tarifs()
  {
    $query = $this->db->get('tarif');
    return $query->result_array();
  }

  public function update_tarif($id, $data)
  {
    $this->db->where('id_tarif', $id);
    $this->db->update('tarif', $data);
  }

  public function delete_tarif($id)
  {
    $this->db->where('id_tarif', $id);
    $this->db->delete('tarif');
  }
}
