<?php
require_once 'AbstractElement.php';

class Lizard extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Paper::class,
        Spock::class
    ];
}