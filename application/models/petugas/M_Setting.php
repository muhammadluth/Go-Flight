<?php

Class M_Setting extends CI_Model{
	public function get_setting(){
		$this->db->where(['id' => 1]);
		return $this->db->get('setting')->row_array();	
	}
	public function update($data){
		$this->db->set($data);
        $this->db->where('id',1);
        $this->db->update('setting');
	}
}