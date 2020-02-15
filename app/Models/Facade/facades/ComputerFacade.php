<?php

namespace App\Models\Facade\Facades;

use App\Models\Facade\CPU;
use App\Models\Facade\HD;
use App\Models\Facade\Keyboard;
use App\Models\Facade\Memory;
use App\Models\Facade\Monitor;
use App\Models\Facade\Mouse;

class ComputerFacade {
    private $cpu;
    private $hd;
    private $keyboard;
    private $memory;
    private $monitor;
    private $mouse;

    public function __construct(){
        $this->cpu = new CPU();
        $this->hd = new HD();
        $this->keyboard = new Keyboard();
        $this->memory = new Memory();
        $this->monitor = new Monitor();
        $this->mouse = new Mouse();
    }

    public function buildComputer() : array {
        $response['cpu'] = $this->cpu->addCPU();
        $response['hd'] = $this->hd->addHD();
        $response['keyboard'] = $this->keyboard->addKeyboard();
        $response['memory'] = $this->memory->addMemory();
        $response['monitor'] = $this->monitor->addMonitor();
        $response['mouse'] = $this->mouse->addMouse();
        $response['status'] = 'Process finished successfully';

        return $response;
    }
}
