<?php

class User extends CI_Model {

    public $tableName = 'users';

    public function login($username, $password)
    {
        return $this->db->get_where($this->tableName,[
            'username' => $username,
            'password' => $password,
        ]);
    }

    public function first($clause)
    {
        $query = $this->db->get_where($this->tableName,$clause);
        return $query->result()[0];
    }

    public function get()
    {
        $query = $this->db->get($this->tableName);
        return $query->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($data, $clause)
    {
        return $this->db->update($this->tableName, $data, $clause);
    }

    public function delete($clause)
    {
        return $this->db->delete($this->tableName, $clause);
    }

}