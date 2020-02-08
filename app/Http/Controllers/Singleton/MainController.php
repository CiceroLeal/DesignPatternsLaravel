<?php

namespace App\Http\Controllers\Singleton;

use App\Http\Controllers\Controller;
use App\Models\Singleton\ErrorLog;
use App\Models\Singleton\Log;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function insertLog(Request $request){
        $request->validate([
            'log' => 'required|string',
        ]);

        $log = Log::getInstance();

        $log->writeLog($request->log);

        ErrorLog::unauthorized();

        return response()->json($log->getLog(), 200);
    }
}
