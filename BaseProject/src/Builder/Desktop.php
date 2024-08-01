<?php

namespace App\Builder;

use App\Builder\Interfaces\ComputerInterface;
use App\Builder\Interfaces\PartInterface;

class Desktop implements ComputerInterface
{
    /**
     * @var PartInterface[]
     */
    private array $parts;

    public function __construct(array $parts) {
        $this->parts = $parts;
    }
    
    public function getComponent(string $name): PartInterface {
        foreach ($this->parts as $part) {
            if ($part instanceof $name) {
                return $part;
            }
        }
        throw new \Exception("Part not found");
    }
}
