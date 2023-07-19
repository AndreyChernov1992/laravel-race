<?php

namespace App\Http\Controllers;

use App\Services\GetRacersListFacade;
use App\Services\GetRacersName;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function home () {

        return view("home");

    }
    public function report () {

        $finalTime = new GetRacersListFacade;
        $resourcesPath = public_path();
        $result = $finalTime->getList($resourcesPath, "asc");

        return view("report")->with("result", $result);

    }
    public function drivers () {

        $names = new GetRacersName;
        $resourcesPath = public_path();
        $racers = $names->getList($resourcesPath);

        return view("drivers")->with("result", $racers);

    }
    public function racer () {

        $finalTime = new GetRacersListFacade;
        $resourcesPath = public_path();
        $result = $finalTime->getList($resourcesPath, "asc");

        return view("racer")->with("result", $result);

    }
}



