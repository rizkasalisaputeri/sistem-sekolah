<?php

require_once 'db.php';

class nilai_harian extends db{

    function show(){
        $data = $this->db->prepare("SELECT * FROM nilai_harian");

        try{
            $data->execute();
            $result = $data->fetchAll();
        } catch (PDOException $e){
            print_r($e->getMessage());
        }

        return $result;
    }

    function store($id_nilai_harian, $tgl_ambil_nilai, $noinduk_siswa, $id_kriteria_harian){
        $data = $this->db->prepare("INSERT INTO raport (id_nilai_harian, tgl_ambil_nilai, noinduk_siswa, id_kriteria_harian) VALUES (?, ?, ?,?)");
        
        $data->bindParam(1, $id_nilai_harian );
        $data->bindParam(2, $tgl_ambil_nilai);
        $data->bindParam(4, $noinduk_siswa);
        $data->bindParam(4, $id_kriteria_harian);

        try {
            $result = $data->execute();
        }
        catch (PDOException $e){
            print_r($e->getMessage());
        }
        return $result;
    }

    function update($id_nilai_harian, $tgl_ambil_nilai, $noinduk_siswa, $id_kriteria_harian) {
        $data = $this->db->prepare("UPDATE nilai_harian
        SET id_nilai_harian = '$id_nilai_harian', 
        tgl_ambil_nilai = '$tgl_ambil_nilai', 
            noinduk_siswa = '$noinduk_siswa'
            id_kriteria_harian = '$id_kriteria_harian'
        WHERE id_nilai_harian = '$id_nilai_harian'");

        try {
            $result = $data->execute();
            } 
        catch(PDOException $e){
            print_r($e->getMessage());
            }
            
        return $result;
    }

    function delete($id_nilai_harian){
        $data = $this->db->prepare("DELETE FROM nilai_harian
                                    WHERE $id_nilai_harian= '$id_nilai_harian'");
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