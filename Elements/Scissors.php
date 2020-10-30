<?php
require_once 'AbstractElement.php';

class Scissors extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Paper::class,
        Lizard::class
    ];
}