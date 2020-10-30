<?php
require_once 'AbstractElement.php';

class Spock extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Scissors::class,
        Rock::class
    ];
}