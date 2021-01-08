<?php

class Stage extends CI_Model {

	public $tableName = 'stages';

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