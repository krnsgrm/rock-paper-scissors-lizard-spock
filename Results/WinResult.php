<?php
require_once 'Result.php';

class WinResult implements Result
{
    public function getMessage(): string
    {
        return 'YOU WON' . PHP_EOL;
    }
}