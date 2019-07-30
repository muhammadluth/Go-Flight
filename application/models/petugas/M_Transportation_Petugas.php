<?php

Class M_Transportation_Petugas extends CI_Model{
    public function get_transportation(){
        $this->db->select('transportation.id,transportation.code,transportation.description,transportation.seat_qty,transportation_type.description as "tranportation_type_description"');
        $this->db->from('transportation');
        $this->db->join('transportation_type','transportation_type.id = transportation.transportation_typeid');
        return $this->db->get()->result_array();
    }
    public function get_transportation_id($id){
        $this->db->select('transportation.id,transportation.code,transportation.description,transportation.seat_qty,transportation_type.description as "tranportation_type_description"');
        $this->db->from('transportation');
        $this->db->join('transportation_type','transportation_type.id = transportation.transportation_typeid');
        $this->db->where(['transportation.id' => $id]);
        return $this->db->get()->row_array();
    }
    public function get_transportion_type(){
        return $this->db->get('transportation_type')->result_array();
    }

    public function add($data){
        $this->db->insert('transportation',$data);
    }

    public function update($data,$id){
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('transportation');
    }
    public function delete($id){
        $this->db->delete('transportation', ['id' => $id]);
    }

}