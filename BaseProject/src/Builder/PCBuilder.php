<?php

namespace App\Builder;

use App\Builder\Interfaces\BuilderInterface;
use App\Builder\Interfaces\ComputerInterface;
use App\Builder\Interfaces\PartInterface;

final class PCBuilder implements BuilderInterface
{
    private array $parts = [];

    public function getComputer(): ComputerInterface {
        return new Desktop($this->parts);
    }

    public function setPart(PartInterface $parts): BuilderInterface {
        $this->parts[] = $parts;
        return $this;
    }
}
