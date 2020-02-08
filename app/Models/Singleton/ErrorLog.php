<?php

namespace App\Models\Singleton;

class ErrorLog
{
    public static function unauthorized(){
        $txt = ' // ';
        $txt .= date('d/m/Y H:i:s');
        $txt .= ' - Unauthorized access';

        Log::getInstance()->writeLog($txt);
    }
}
