<?php
class Model_linksingle extends Model_db{
    function listRecords() 
    {
        $sql = "SELECT * FROM linksingle";
        return $this->result1(0,$sql);
    }
  
  
    function editLinkSingle($name, $id){
        $sql = "UPDATE linksingle SET name = ? WHERE id = ?";
        return $this->exec1($sql, $name, $id);
    }

    function showOneLink($id){
        $sql = "SELECT * FROM linksingle WHERE id=?";
        return $this->result1(1,$sql,$id);
    }
  
 
}

?>