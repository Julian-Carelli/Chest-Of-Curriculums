<?php 

namespace App\Models;

use \PDO;

define("DB_TYPE", "mysql");
define("DB_HOST", "localhost");
define("DB_NAME", "bd_prueba");
define("DB_USER", "root");
define("DB_PASSWORD", "");


class Connection extends PDO{


    public function __construct()
    {
        try {

            
            parent::__construct(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",DB_USER,DB_PASSWORD);

            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        }
        catch(PDOException $e){
            echo 'Error al conectarse a la base de datos'.$e->getMessage();
            exit;
        }

    }

}