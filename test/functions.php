<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testSuccessoutputFieldAsHeader()
    {
        $expected ='<ul class="header"><li class="heading">testA</li><li class="heading">testB</li><li class="heading">testC</li></ul>';

        $input = ['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC'];

        $case = outputFieldAsHeader($input);

        $this->assertEquals($case, $expected);

    }

//    public function testFailureoutputFieldAsHeader()
//    {
//         $expected = ;
//
//         $input = ;
//
//        $case = outputFieldAsHeader($input);
//
//        $this->assertEquals($case, $expected);
//    }
}

