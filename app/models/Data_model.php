<?php 

Class Data_model{
    private $dbh; //database handler
    private $stmt;

    //koneksi ke database
    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=mahasiswa';

        try{
            $this->dbh = new PDO($dsn,'root','');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM user');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}