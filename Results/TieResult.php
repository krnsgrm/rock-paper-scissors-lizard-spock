<?php
require_once 'Result.php';

class TieResult implements Result
{
    public function getMessage(): string
    {
        return 'IT\'S A TIE' . PHP_EOL;
    }
}