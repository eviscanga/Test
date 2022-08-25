<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model{

    public function get_users(){
        $query = $this->db->get('users');
        return $query->result();
    }

    public function insertUser($data){
        return $this->db->insert('users', $data);
    }

    public function findUser($id){
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->row();
    }



    public function update_User($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('users', $data);

    }


    public function delete_User($id){
        return $this->db->delete('users',['id'=>$id]);
    }

    public function user_exists($id){
        $this->db->where('id',$id);
        $query = $this ->db->get('users');
    
    if ($query->num_rows() > 0)
            return true;
    else    
        return false;
    }

}