<?php

require_once 'db.php';

class siswa extends db{
    function show(){
        $data = $this->db->prepare("SELECT * FROM siswa");

        try {
            $data->execute();
            $result = $data->fetchAll();
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }

        return $result;
    }
    
    function store( $noinduk_siswa, $NIK_walmur, $jenis_kelamin, $tgllahir,$tgl_masuk, $tgl_lulus,$tgl_alamat, $anakke){

        $data = $this->db->prepare("INSERT INTO siswa (noinduk_siswa, NIK_walmur, jenis_kelamin, tgllahir, tgl_masuk, tgl_lulus, tgl_alamat,anakke) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        $data->bindParam(1, $noinduk_siswa);
        $data->bindParam(2, $NIK_walmur);
        $data->bindParam(3, $jenis_kelamin);
        $data->bindParam(4, $tgllahir);
        $data->bindParam(5, $tgl_masuk);
        $data->bindParam(6, $tgl_lulus);
        $data->bindParam(7, $tgl_alamat);
        $data->bindParam(8, $anakke);
        
        try {
            $result = $data->execute();
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
        
        return $result;
    }
    
    function update($noinduk_siswa, $alamat){
        $data = $this->db->prepare("UPDATE siswa 
                                    SET alamat = '$alamat'
                                    WHERE noinduk_siswa = '$noinduk_siswa'");

        try {
            $result = $data->execute();
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
            
        return $result;
    }
    
    function delete($noinduk_siswa){
        $data = $this->db->prepare("DELETE FROM siswa
                                    WHERE noinduk_siswa = $noinduk_siswa");

        try {
            $result = $data->execute();
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
            
        return $result;
    }
    
    function view(){
        
    }

}
?>