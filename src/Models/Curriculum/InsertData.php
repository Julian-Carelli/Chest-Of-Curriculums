<?php 

namespace App\Models\Curriculum;

use App\Models\Connection;
use App\Models\Curriculum\Curriculum;
use \PDO;


class InsertData extends Curriculum {

    public function insertData(Connection $connection) : bool
    {   
        try{

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $curriculums = $connection->prepare("INSERT INTO `curriculums`(`name`, `last_name`, `profession`, `email`, `age`, `place_of_residence`, `date`) VALUES (:name, :last_name, :profession, :email, :age, :place_of_residence, :date)");

            $curriculums->bindParam(':name', $this->name);
            $curriculums->bindParam(':last_name', $this->last_name);
            $curriculums->bindParam(':profession', $this->profession);
            $curriculums->bindParam(':email', $this->email);
            $curriculums->bindParam(':age', $this->age);
            $curriculums->bindParam(':place_of_residence', $this->place_of_residence);
            $curriculums->bindParam(':date', $this->date);

            $curriculum = $curriculums->execute();
            return $curriculum;


        }
        catch(PDOException $Exception ){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
    }

}