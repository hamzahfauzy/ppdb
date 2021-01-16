<?php

class Student extends CI_Model {

    public $tableName = 'students';

    public function get($clause = false)
    {
        $query = $this->db->get($this->tableName);
        if($clause)
            $query = $this->db->get_where($this->tableName,$clause);
        return $query->result();
    }

    public function find($clause)
    {
        $query = $this->db->get_where($this->tableName,$clause);
        return $query->row();
    }

    public function num_row($jenjang)
    {
        $this->db->like('register_number',$jenjang,'both');
        return $this->db->get($this->tableName)->num_rows();
    }

    public function check($NIK,$email)
    {
        $this->db->where('NIK',$NIK);
        $this->db->or_where('email',$email);
        return $this->db->get($this->tableName)->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->tableName, $data);
        $insert_id = $this->db->insert_id();
        return $this->find(['id'=>$insert_id]);
    }

    public function update($data, $clause)
    {
        return $this->db->update($this->tableName, $data, $clause);
    }

    public function delete($clause)
    {
        return $this->db->delete($this->tableName, $clause);
    }

    public function siblings($clause)
    {
        $query = $this->db->get_where('student_siblings',$clause);
        return $query->result();
    }

    public function parents($clause)
    {
        $query = $this->db->get_where('student_parents',$clause);
        return $query->result();
    }

    public function files($clause)
    {
        $query = $this->db->get_where('student_files',$clause);
        return $query->result();
    }

    public function achievements($clause)
    {
        $query = $this->db->get_where('student_achievements',$clause);
        return $query->result();
    }

    public function health($clause)
    {
        $query = $this->db->get_where('student_health',$clause);
        return $query->row();
    }

    public function user($clause)
    {
        $query = $this->db->get_where('users',$clause);
        return $query->row();
    }

}