<?php
$this->db->select('*');
$this->db->from('wilayah_data_master');
$this->db->order_by('nama_kota');
$this->db->join('wilayah_data', 'wilayah_data.id_wilayah = wilayah_data_master.id_wilayah');
$query = $this->db->get('wilayah_data_master');
return $query->result_array();
