<?php

abstract class AbstractElement implements ElementInterface
{
    protected array $beatable = [];

    public function beats(ElementInterface $element): Result
    {
        if (in_array(get_class($element), $this->beatable)) {
            return new WinResult();
        }

        if ($this instanceof $element) {
            return new TieResult();
        }

        return new LoseResult();
    }
}