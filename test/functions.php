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

        var_dump($case);

        $this->assertEquals($case, $expected);

    }

    public function testFailureoutputFieldAsHeader()
    {
         $expected = 'invalid input';

         $input = ['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC', 'testD' => 'thingD', 'testE' => 'thingE','testF' => 'thingF', ];

        $case = outputFieldAsHeader($input);

        $this->assertEquals($case, $expected);
    }

    public function testMalformedoutputFieldAsHeader()
    {

        $input = "testing";

        $this-> expectException(TypeError::class);

        outputFieldAsHeader($input);
    }

    public function testSuccessoutputDataAsRows()
    {
        $expected ='<ul class="dataList"><li class="data">thingA</li><li class="data">thingB</li><li class="data">thingC</li><li class="data">thingD</li><li class="data">thingE</li><li class="data">thingF</li><br></ul>';

        $input = [['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC', 'testD' => 'thingD', 'testE' => 'thingE','testF' => 'thingF', ]];

        $case = outputDataAsRows($input);

        var_dump($case);

        $this->assertEquals($case, $expected);

    }

    public function testFailureoutputDataAsRows()
    {
        $expected = 'invalid input';

        $input = ['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC', 'testD' => 'thingD', 'testE' => 'thingE','testF' => 'thingF', ];

        $case = outputDataAsRows($input);

        $this->assertEquals($case, $expected);
    }

    public function testMalformedoutputDataAsRows()
    {

        $input = "testing";

        $this-> expectException(TypeError::class);

        outputDataAsRows($input);
    }


}


