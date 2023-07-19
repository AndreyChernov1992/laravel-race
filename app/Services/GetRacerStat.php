<?php
namespace App\Services;

use App\Services\ArrayParse;

class GetRacerStat {

    public $arr;
    public $sortList;
    
    public function __construct() {
        $this->arr = new ArrayParse;
        $this->sortList = new SortList;
    }

    public function getList ($resoursesPath) {
        
        $name = $this->arr->getArray("$resoursesPath . /abbreviations.txt");
        $startTime = $this->arr->getArray("$resoursesPath . /start.log");
        $endTime = $this->arr->getArray("$resoursesPath . /end.log");

        return $name;
    }

}