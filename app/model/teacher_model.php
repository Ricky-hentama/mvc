<?php

class teacher_model
{
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllguru()
    {
        $this->db->query('SELEC * FROM' . $this->table);
        return $this->db->resultSet();
    }
}
