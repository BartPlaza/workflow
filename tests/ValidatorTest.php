<?php

use App\Models\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    public function testPassValidation()
    {
        //given
        $validator = new Validator('good');
        //when
        $result = $validator->validate();
        //then
        $this->assertTrue($result);
    }

    public function testNorPassValidation()
    {
        //given
        $validator = new Validator('bad');
        //when
        $result = $validator->validate();
        //then
        $this->assertFalse($result);
    }
}
