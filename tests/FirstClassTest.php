<?php

namespace erikdmitchell\my_first_library;

class FirstClassTest extends \PHPUnit\Framework\TestCase
{
    public function testEndocdeString()
    {
        $my_first_library=new FirstClass();
        $result=$my_first_library->encodeString('abc');
        $this->assertSame($result, 'bcd');
    }
}
