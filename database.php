<?php

class Database{
    
    private $hostname = "qagp640.bookandroom.es";
    private $database = "qagp640";
    private $username = "qagp640";
    private $password = "Castellon5";
    private $charset = "utf8";

    function conectar(){
        try{
            $conexion = "mysql:host" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->chartset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);

            return $pdo;
        } catch(PDOException $e){
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}





?>