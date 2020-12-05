<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\User\InsertData;

class InsertDataUserTest extends TestCase
{

    public function testAddUser()
    {

        $sut = new Connection();
        $sut_2 = new InsertData('username', 'email@example.com', 'password');
        $this->assertEquals(true, $sut_2->insertData($sut));

    }

}