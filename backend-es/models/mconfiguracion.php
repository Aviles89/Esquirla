<?php
class mconfiguracion extends MY_Model {
	public function __construct()
	{
		parent::__construct();
		$this->table = "configuracion";
        $this->alias = 'c';

        $this->selectList = "".
            $this->alias.".id
            ,".$this->alias.".titulo";

        $this->selectDefault = "".
            $this->alias.".id
            ,".$this->alias.".titulo
            ,".$this->alias.".descripcion
            ,".$this->alias.".string
            ,".$this->alias.".status
            ,IF(".$this->alias.".status > 0,'Activo','Inactivo') AS txtstatus";
		
	}
    function getAll(){
        $this->db->select($this->selectDefault,FALSE);
        $arrayWhere = array($this->alias.'.status' => true);
        $this->db->where($arrayWhere);
        $query = $this->db->get($this->table.' AS '.$this->alias);
        return $query;
    }

    function getList(){
        return $this->getAll();
    }

    function getById($id){
        $this->db->select($this->selectDefault,FALSE);
        $arrayWhere = array($this->alias.'.id' => $id);
        $this->db->where($arrayWhere);
        $query = $this->db->get($this->table.' AS '.$this->alias);
        return $query;
    }
    function getId($id)
    {
        $this->db->select("id, descripcion, string, status", FALSE);
        $arrayWhere = array('id' => $id);
        $this->db->where($arrayWhere);
        $this->db->group_by(array("id"));
        $query = $this->db->get($this->table);
        if($query->num_rows()>0){
            return $query;
        }
        return 0;
    }

}
