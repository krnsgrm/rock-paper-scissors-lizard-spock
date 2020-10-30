<?php
require_once 'Result.php';

class LoseResult implements Result
{
    public function getMessage(): string
    {
        return 'YOU LOST' . PHP_EOL;
    }
}