<?php
namespace App\Services;

use App\Services\ArrayParse;

class GetRacersName {

    public $arr;
    
    public function __construct() {
        $this->arr = new ArrayParse;
    }

    public function getList ($resoursesPath) {
        
        $name = $this->arr->getArray("$resoursesPath . /abbreviations.txt");

        return $name;
    }

}