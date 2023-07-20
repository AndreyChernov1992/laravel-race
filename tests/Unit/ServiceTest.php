<?php

namespace Tests\Unit;

use App\Services\GetRacersListFacade;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase {

    private GetRacersListFacade $object;    

    protected function setUp() :void {
        $this->object = new GetRacersListFacade;
    }
    
    public function addDataProvider() {
        return array(
            array(public_path(),"D:\OSPanel\domains\laravel-race\public"),
            array("asc", "desc"),
        );
    }

    /**
    * @dataProvider addDataProvider
    * @covers GetRacersListFacade::getList
    */

    public function testString($a, $b) :void {
        $this->object->getList($a, $b);
        // $this->assertSame($result, $b);
    }
}