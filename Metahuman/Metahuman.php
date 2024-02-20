<?php

declare(strict_types=1);

namespace Metahuman;

abstract class Metahuman {
    protected string $name;
    protected int $age;
    protected array $powers = [];
    protected string $catchPhrase;

    public function __construct(string $name, int $age, array $powers, string $catchPhrase) {
        $this->name = $name;
        $this->age = $age;
        $this->powers = $powers;
        $this->catchPhrase = $catchPhrase;
    }

    public function getCatchPhrase() {
        return $this->catchPhrase;
    }

    abstract public function getTeam();
    abstract public function getWeakness();
}
