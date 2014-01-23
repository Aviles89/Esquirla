<?php
class mabout extends MY_Model{

    public function __construct(){
        parent :: __construct();
        $this->table = "about";
        $this->alias = 'c';

        $this->selectList = "".
            $this->alias.".id
            ,".$this->alias.".titulo
            ,".$this->alias.".descripcion
            ,".$this->alias.".foto
            ,".$this->alias.".thumbnail
            ,".$this->alias.".link			
            ,".$this->alias.".status
            ,IF(".$this->alias.".status > 0,'Activo','Inactivo') AS txtstatus";

        $this->selectDefault = "".
            $this->alias.".id
            ,".$this->alias.".titulo
            ,".$this->alias.".descripcion
            ,".$this->alias.".titulo_2
            ,".$this->alias.".descripcion_2
            ,".$this->alias.".titulo_3
            ,".$this->alias.".descripcion_3
            ,".$this->alias.".foto_1
            ,".$this->alias.".thumbnail_1
            ,".$this->alias.".foto_2
            ,".$this->alias.".thumbnail_2
            ,".$this->alias.".foto_3
            ,".$this->alias.".thumbnail_3
            ,".$this->alias.".foto_4
            ,".$this->alias.".thumbnail_4
            ,".$this->alias.".foto_5
            ,".$this->alias.".thumbnail_5
            ,".$this->alias.".link				
            ,".$this->alias.".status
            ,IF(".$this->alias.".status > 0,'Activo','Inactivo') AS txtstatus";
    }
    function getAll(){
        $this->db->select($this->selectDefault,FALSE);
        //$arrayWhere = array($this->alias.'.status' => true);
        //$this->db->where($arrayWhere);
        $query = $this->db->get($this->table.' AS '.$this->alias);
        return $query;
    }

    function getById($id){
        $this->db->select($this->selectDefault,FALSE);
        $arrayWhere = array($this->alias.'.id' => $id);
        $this->db->where($arrayWhere);
        $query = $this->db->get($this->table.' AS '.$this->alias);
        if($query->num_rows()>0){
            return $query;
        }
        return 0;
    }


}