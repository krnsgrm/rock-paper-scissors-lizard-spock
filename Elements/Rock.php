<?php
require_once 'AbstractElement.php';

class Rock extends AbstractElement implements ElementInterface
{
    protected array $beatable = [
        Scissors::class,
        Lizard::class
    ];
}