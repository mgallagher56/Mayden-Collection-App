<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{

    public function testSuccessoutputDataAsRows()
    {
        $expected ='<ul class="dataList"><li class="data"></li><li class="data"></li><li class="data"></li><li class="data"></li><li class="data"><img src=""></li></ul>';

        $input = [['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC', 'testD' => 'thingD', 'testE' => 'thingE']];

        $case = outputDataAsRows($input);

        $this->assertEquals($case, $expected);

    }

    public function testFailureoutputDataAsRows()
    {
        $expected = 'invalid input';

        $input = [['testA' => 'thingA', 'testB' => 'thingB', 'testC' => 'thingC', 'testD' => 'thingD', 'testE' => 'thingE','testF' => 'thingF']];

        $case = outputDataAsRows($input);

        $this->assertEquals($case, $expected);
    }

    public function testMalformedoutputDataAsRows()
    {

        $input = "testing";

        $this-> expectException(TypeError::class);

        outputDataAsRows($input);
    }

    public function testSuccesscheckValidity()
    {
        $expected = true;

        $case = checkValidity('test1', 'test2', 'test3', '1992', 'test4');

        $this->assertEquals($case, $expected);

    }

    public function testFailurecheckValidity()
    {
        $expected = false;

        $case = checkValidity('test1', 'test2', 'test3', '1001', 'test4');

        $this->assertEquals($case, $expected);
    }

    public function testMalformedcheckValidity()
    {

        $input = 1010101;

        $this-> expectException(TypeError::class);

        outputDataAsRows($input);
    }
}



