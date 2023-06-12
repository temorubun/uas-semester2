<?php

class KecamatanModel {

    private $table = "kecamatan";
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllKecamatan() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahKecamatan($data){
        $this->db->query("INSERT INTO kecamatan (nama_kecamatan) VALUES(:nama_kecamatan)");
        $this->db->bind('nama_kecamatan',$data['nama_kecamatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getKecamatanById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    public function updateDataKecamatan($data){
        $this->db->query("UPDATE kecamatan SET nama_kecamatan=:nama_kecamatan WHERE id=:id");
        $this->db->bind('id',$data['id']);
        $this->db->bind('nama_kecamatan',$data['nama_kecamatan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariKecamatan(){
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama_kecamatan LIKE :key");
        $this->db->bind(':key', "%$key%", PDO::PARAM_STR);
        return $this->db->resultSet();
    }

    public function deleteKecamatan($id){
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    
        return $this->db->rowCount();
    }


    
    



}



?>
