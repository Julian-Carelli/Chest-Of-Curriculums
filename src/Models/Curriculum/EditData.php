<?php 

namespace App\Models\Curriculum;

use App\Models\Connection;
use \PDO;

class EditData 
{
    public function editData(Connection $connection, array $array) : bool
    {
        try {

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $curriculums = $connection->prepare('UPDATE curriculums SET name = ?, last_name = ?, profession = ?, email = ?, age = ?, place_of_residence = ?, date = ? WHERE id = ?;');

            $curriculum = $curriculums->execute([$array['name'], $array['lastName'], $array['profession'], $array['email'], $array['age'], $array['place'], $array['date'], $array['id']]);
            
            return $curriculum;
        }

        catch(PDOException $Exception){
            echo 'Error'. ' : ' . $Exception->getMessage();
        }   
    }
}

