<?php
require_once 'AbstractElement.php';

class Paper extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Rock::class,
        Spock::class
    ];
}