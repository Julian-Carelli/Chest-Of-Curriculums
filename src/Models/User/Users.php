<?php 

namespace App\Models\User;

use App\Interfaces\BaseInterface;
use App\Models\Connection;
use \PDO;


Class Users
{

    protected $username;
    protected $email;
    protected $password;

    public function __construct(string $username, string $email, string $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    
}