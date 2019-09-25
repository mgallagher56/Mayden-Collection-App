<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{

    public function testSuccessoutputDataAsRows()
    {
        $expected ='<ul class="dataList"><li class="data"></li><li class="data"></li><li class="data"></li><li class="data"></li></ul>';

        $input = [['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC', 'testD' => 'thingD']];

        $case = outputDataAsRows($input);

        $this->assertEquals($case, $expected);

    }

    public function testFailureoutputDataAsRows()
    {
        $expected = 'invalid input';

        $input = [['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC', 'testD' => 'thingD', 'testE' => 'thingE']];

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



