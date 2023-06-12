<?php

class KependudukanModel {

    private $table = "kependudukan";
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllKependudukan() {
        $this->db->query("SELECT kependudukan.*, kecamatan.nama_kecamatan FROM " . $this->table . " JOIN kecamatan ON kecamatan.nama_kecamatan = kependudukan.kecamatan_nama");
        return $this->db->resultSet();
    }

    public function tambahKependudukan($data) {
        $this->db->query("INSERT INTO kependudukan (kecamatan_nama, laki_laki, perempuan, tahun, total) 
            VALUES (:kecamatan_nama, :laki_laki, :perempuan, :tahun, :total)");
        $this->db->bind('kecamatan_nama', $data['kecamatan_nama']);
        $this->db->bind('laki_laki', $data['laki_laki']);
        $this->db->bind('perempuan', $data['perempuan']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('total', $data['laki_laki'] + $data['perempuan']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function getKependudukanById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    public function updateDataKependudukan($data) {
        $this->db->query("UPDATE kependudukan SET kecamatan_nama=:kecamatan_nama, `laki_laki`=:laki_laki, perempuan=:perempuan, tahun=:tahun, total=:total WHERE id=:id");
        $this->db->bind('id', $data['id']);
        $this->db->bind('kecamatan_nama', $data['kecamatan_nama']);
        $this->db->bind('laki_laki', $data['laki_laki']);
        $this->db->bind('perempuan', $data['perempuan']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('total', $data['laki_laki'] + $data['perempuan']);
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    

    public function cariKependudukan() {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE kecamatan_nama LIKE :key");
        $this->db->bind(':key', "%$key%", PDO::PARAM_STR);
        return $this->db->resultSet();
    }
    
    
    

    public function deleteKependudukan($id){
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
    
        return $this->db->rowCount();
    }


    
    



}



?>
