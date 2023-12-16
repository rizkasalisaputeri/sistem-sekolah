<?php

require_once 'db.php';

class raport extends db{

    function show(){
        $data = $this->db->prepare("SELECT * FROM raport");

        try{
            $data->execute();
            $result = $data->fetchAll();
        } catch (PDOException $e){
            print_r($e->getMessage());
        }
        return $result;
    }

    function store($id_rapor, $cat_rapor, $noinduk_siswa){
        $data = $this->db->prepare("INSERT INTO raport (id_rapor, cat_rapor, noinduk_siswa) VALUES (?, ?, ?)");
        $data->bindParam(1, $id_rapor);
        $data->bindParam(2, $cat_rapor);
        $data->bindParam(3, $noinduk_siswa);
        
        try {
            $result = $data->execute();
        }
        catch (PDOException $e){
            print_r($e->getMessage());
        }
        return $result;

    }

 
    function update ($id_rapor, $cat_rapor, $noinduk_siswa) {
        $data = $this->db->prepare("UPDATE raport
        SET id_rapor = '$id_rapor', 
           cat_rapor = '$cat_rapor', 
           noinduk_rapor = '$noinduk_siswa'
           
        WHERE id_rapor = '$id_rapor'");

        try {
            $result = $data->execute();
            } 
        catch(PDOException $e){
            print_r($e->getMessage());
            }
            
        return $result;
    }

    function delete($id_rapor){
        $data = $this->db->prepare("DELETE FROM raport
                                    WHERE id_rapor= '$id_rapor'");
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