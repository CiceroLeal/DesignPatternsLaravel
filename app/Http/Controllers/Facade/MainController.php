<?php

namespace App\Http\Controllers\Facade;

use App\Http\Controllers\Controller;
use App\Models\Facade\Facades\ComputerFacade;

class MainController extends Controller
{
    public function buildComputer(){
        return (new ComputerFacade())->buildComputer();
    }
}
