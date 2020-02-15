<?php

namespace App\Models\Singleton;

class Log
{
    private static $Log;
    private $txtLog;

    private function __construct() {}
    private function __wakeup() {}
    private function __clone() {}

    /**
     * @return Log
     */
    public static function getInstance() : Log {
        if (self::$Log === null)
            self::$Log = new Log();

        return self::$Log;
    }

    /**
     * @param string $txt
     */
    public function writeLog(string $txt) : void{
        $this->txtLog .= $txt;
    }

    /**
     * @return string
     */
    public function getLog() : string{
        return $this->txtLog;
    }
}
