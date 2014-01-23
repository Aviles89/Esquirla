<?php
class musuario extends MY_Model{

	public function __construct(){
		parent :: __construct();
		$this->table = "usuarios";
	}
	
	public function checkUser($u,$p){
		return $this->db->query("
        SELECT u.id
            ,u.status
            ,u.usuario
        FROM ".$this->table." AS u
        WHERE u.usuario = '".$u."'
        AND u.password = '".$p."'
        AND u.status= '1'
		");
	}

    function getList(){
        $this->db->select("id, usuario, rol, IF(status > 0,'Activo','Inactivo') AS txtstatus",FALSE);
        $arrayWhere = array('status' => true);
        $this->db->where($arrayWhere);
        $this->db->group_by(array("id"));
        $this->db->order_by("usuario", "asc");
        $query = $this->db->get($this->table);
        return $query;
    }

	function getById($id){
        $this->db->select("id, usuario, rol, status");
        $arrayWhere = array('id' => $id);
        $this->db->where($arrayWhere);
        $query = $this->db->get($this->table);
        return $query;
	}

}