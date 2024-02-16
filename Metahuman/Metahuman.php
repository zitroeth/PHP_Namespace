<?php
namespace Metahuman;

declare(strict_types=1);

abstract class Metahuman {
    protected string $name;
    protected int $age;
    protected array $powers = [];
    protected string $catchPhrase;

    protected function __construct(string $name, int $age, array $powers, string $catchPhrase){
        $this->name = $name;
        $this->age = $age;
        $this->powers = $powers;
        $this->catchPhrase = $catchPhrase;
    }

    abstract protected function
}