<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\User\ValidationData;

class ValidationDataUserTest extends TestCase
{

    public function testValidationUser()
    {
        $sut = new Connection();
        $sut_2 = new ValidationData();

        $_POST['email'] = 'pipo';
        $_POST['password'] = '252';

        $array1 = $sut_2->validationData($sut,'email','password');
        $array2 = $sut_2->validationData($sut,'email','password');

        $this->assertEqualsCanonicalizing($array1, $array2);
    }

}