<?php

namespace Tests\Unit;

use App\Services\GetRacersListFacade;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase 
{

    private GetRacersListFacade $object;    

    protected function setUp() :void 
    {
        $this->object = new GetRacersListFacade;
    }

    /**
    * @covers GetRacersListFacade::getList
    */

    public function testString() :void 
    {
        $a = "D:\OSPanel\domains\laravel-race\public";
        $b = "asc";
        $result = $this->object->getList($a, $b);
        $this->assertIsArray($result);
    } 
}