<?php
namespace DesignPatterns\Decorator;

class ForceNecklace extends CharacterDecorator
{
    public function __construct(Character $character)
    {
        parent::__construct($character);
        $this->attack = 3;
    }
}