<?php

class Mahasiswa_model{
    // private $mhs =[
    //     [
    //     "nama" => "Lely Butarbutar",
    //     "nim" => "13323050",
    //     "email" => "lely@gmail.com",
    //     "prodi" => "Teknologi Komputer"
    // ],
    // [
    //     "nama" => "Tanisha Aritonang",
    //     "nim" => "13323046",
    //     "email" => "tanis@gmail.com",
    //     "prodi" => "Teknologi Komputer"
    // ],
    // [
    //     "nama" => "Grace Nainggolan",
    //     "nim" => "13323049",
    //     "email" => "geres@gmail.com",
    //     "prodi" => "Teknologi Komputer"
    // ],
    // [
    //     "nama" => "Enjelita Sitorus",
    //     "nim" => "13323023",
    //     "email" => "enjel@gmail.com",
    //     "prodi" => "Teknologi Komputer"
    // ]
    // ];

    // private $dbh;
    // private $stmt;

    // public function __construct(){
    //     // data source
    //     $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //     try{
    //         $this->dbh = new PDO($dsn, 'rott', 'root');
    //     } catch(PDOException $e){
    //         die($e->getMessage());
    //     }
    // }

    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table); // Tambahkan spasi setelah 'FROM'
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        if (!isset($data['prodi'])) {

            $data['prodi'] = 'Default Prodi';
        }
    
        $query = "INSERT INTO mahasiswa (nama, nim, email, prodi)
                        VALUES (:nama, :nim, :email, :prodi)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('prodi', $data['prodi']);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }
    
}

?>