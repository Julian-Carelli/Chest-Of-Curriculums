<?php 

namespace App\Models\Curriculum;

use App\Models\Connection;
use \PDO;

class SearchData
{ 
    /** 
    * Busca curriculums en la base de datos que coincidan con el parametro name pasado
    * @param Connection $connection
    * @param string $name
    */

    public function searchData(Connection $connection, string $name) : array
    {
        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $curriculums = $connection->prepare("SELECT * FROM curriculums WHERE name LIKE '$name%'");
    
            $curriculums->execute([$name]);
    
            $data = $curriculums->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        catch(PDOException $Exception){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
    }
}