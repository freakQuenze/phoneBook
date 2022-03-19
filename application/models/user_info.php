<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user_info extends CI_Model {

    public function getAll() {
        return $this->db->get('user_info', 10)->result();
    }

    public function get_users($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('user_info', 10);

        return $query->result();
    }

    public function insert($data) {
        $this->db->insert('user_info', $data);
        return $this->db->insert_id();
    }

    public function getDataById($id) {
        $query = $this->db->query("SELECT id, name FROM user_info WHERE id='$id'");
        return $query->result();
    }

    public function update($id, $data) {

        $this->db->where('id', $id);
        $this->db->update('user_info', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('user_info');
        return true;
    }

    public function create() {
        
        $this->name   = $_POST['name'];

        $this->db->insert('user_info', $this);
    }
}