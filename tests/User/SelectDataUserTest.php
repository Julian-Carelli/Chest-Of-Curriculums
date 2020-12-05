<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\User\SelectData;

class SelectDataUserTest extends TestCase
{
    
    public function testSelectUser()
    {
        $NUMBER_ID = 1;

        $sut = new Connection();
        $sut_2 = new SelectData();

        $array1 = $sut_2->selectData($sut, $NUMBER_ID);
        $array2 = $sut_2->selectData($sut, $NUMBER_ID);

        $this->assertEqualsCanonicalizing($array1, $array2);
    }

}