<?php 

namespace App\Models\Curriculum;

use \PDO;

class Curriculum 
{

    protected $name;
    protected $last_name;
    protected $profession;
    protected $email;
    protected $age;
    protected $place_of_residence;
    protected $date;

    public function __construct(string $name, string $last_name, string $profession, string $email, string $age, string $place_of_residence, string $date)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->profession = $profession;
        $this->email = $email;
        $this->age = $age;
        $this->place_of_residence = $place_of_residence;
        $this->date = $date;
    }
    
}