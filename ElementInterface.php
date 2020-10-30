<?php

interface ElementInterface
{
    public function beats(ElementInterface $element): Result;
}