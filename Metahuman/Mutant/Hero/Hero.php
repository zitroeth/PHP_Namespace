<?php

namespace Metahuman\Mutant\Hero;

use Metahuman\Mutant\Mutant;

declare(strict_types=1);

class Hero extends Mutant {
    protected string $heroTeam;
    protected string $heroWeakness;

    protected function __construct(string $name, int $age, array $powers, string $catchPhrase, string $mutationType, string $heroTeam, string $heroWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $mutationType);
        $this->heroTeam = $heroTeam;
        $this->heroWeakness = $heroWeakness;
    }
}
