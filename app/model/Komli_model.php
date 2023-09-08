<?php

class Komli_model{
    private $table = 'komli';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllBlog(){
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }
    public function getKomliById($id){
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataKomli($data){
        $query = "INSERT INTO komli VALUES ('', :nama)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataKomli($id){
        $query = "DELETE FROM komli WHERE id =:id";

        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKomli($data){
    $query = "UPDATE nama SET
                nama = :nama,
                WHERE id = :id";
        
    $this->db->query($query);
    $this->db->bind('nama', $data['komli']);
    $this->db->bind('id', $data['id']);
    $this->db->execute();
    return $this->db->rowCount();
    }
}
?>