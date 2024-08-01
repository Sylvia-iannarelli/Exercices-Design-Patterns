<?php

namespace App\Builder\Interfaces;

interface BuilderInterface
{
    public function getComputer(): ComputerInterface;

    public function setPart(PartInterface $part): self;
}
