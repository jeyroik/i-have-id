<?php

use jeyroik\components\attributes\THasIdInt;
use jeyroik\components\attributes\THasIdString;
use jeyroik\interfaces\attributes\IHaveId;
use jeyroik\interfaces\attributes\IHaveIdInt;
use jeyroik\interfaces\attributes\IHaveIdString;
use PHPUnit\Framework\TestCase;

class IdTest extends TestCase
{
    public function testBasic()
    {
        $string = new class ([
            IHaveIdString::FIELD__ID => 'id'
        ]) implements IHaveIdString {
            use THasIdString;
        };

        $this->assertEquals('id', $string->getId());
        $this->assertEquals('id', $string[IHaveId::FIELD__ID]);

        $string = new class implements IHaveIdString {
            use THasIdString;
        };
        $this->assertEquals('', $string->getId(''));
        $this->assertEquals('default', $string->getId('default'));

        $int = new class ([
            IHaveIdInt::FIELD__ID => 1
        ]) implements IHaveIdInt {
            use THasIdInt;
        };

        $this->assertEquals(1, $int->getId());
        $this->assertEquals(1, $int[IHaveId::FIELD__ID]);

        $int = new class implements IHaveIdInt {
            use THasIdInt;
        };
        $this->assertEquals(0, $int->getId());
        $this->assertEquals(2, $int->getId(2));
    }
}
