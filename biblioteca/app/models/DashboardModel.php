<?php
//modelo correspondiente a cada controlador
class DashboardModel{
    private $db;

    public function __construct(){
        $this->db = new Dbase;
    }
    public function listar()
    {
        $this->db->query("SELECT * FROM medico");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}