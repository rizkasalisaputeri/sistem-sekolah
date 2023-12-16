<?php

require_once 'db.php';

class prakarya extends db{

    function show(){
        $data = $this->db->prepare("SELECT * FROM prakarya");

        try{
            $data->execute();
            $result = $data->fetchAll();
        } catch (PDOException $e){
            print_r($e->getMessage());
        }

        return $result;
    }

    function delete($id_prakarya){
        $data = $this->db->prepare("DELETE FROM prakarya
                                    WHERE id_prakarya= '$id_prakarya'");
        try {
            $result = $data->execute();
            } 
            catch(PDOException $e){
            print_r($e->getMessage());
            }
            
        return $result;
    }
  
}

?>