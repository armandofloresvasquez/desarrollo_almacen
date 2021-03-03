<?php

class conectar{
    private $servidor="localhost";
    private $usuario="root";
    //private $bd="almacen_febrero_bd";
    private $bd="al-feb-15";
    private $password="";

    public function conexion(){
        $conexion=mysqli_connect($this->servidor,
                                 $this->usuario,
                                 $this->password,
                                 $this->bd);
        return $conexion;
    }

}


// class Database{

//     private $host;
//     private $db;
//     private $user;
//     private $password;
//     private $charset;

//     public function __construct(){
//         $this->host = 'localhost';
//         //$this->db = 'almacen_febrero_bd';
//         //$this->db = 'almacen_febrero_bd';
//         $this->db = 'al-feb-15';
//         $this->user = 'root';
//         $this->password = '';
//         $this->charset = 'utf8mb4';
//     }

//     function connect(){
//         try{
//             $connecxion = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
//             $options = [
//                 PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//                 PDO::ATTR_EMULATE_PREPARES   => false,
//             ];
            
//             $pdo = new PDO($connecxion, $this->user, $this->password, $options);
    
//             return $pdo;
//         }catch(PDOException $e){
//             print_r('Error connection: ' . $e->getMessage());
//         }
//     }

// }

?>