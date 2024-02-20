<?php

declare(strict_types=1);

namespace Metahuman\Mutant\Hero;

use Metahuman\Mutant\Mutant;

class Hero extends Mutant {
    protected string $heroTeam;
    protected string $heroWeakness;

    public function __construct(string $name, int $age, array $powers, string $catchPhrase, string $mutationType, string $heroTeam, string $heroWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $mutationType);
        $this->heroTeam = $heroTeam;
        $this->heroWeakness = $heroWeakness;
    }

    public function getTeam() {
        return $this->heroTeam;
    }

    public function getWeakness() {
        return $this->heroWeakness;
    }
}
