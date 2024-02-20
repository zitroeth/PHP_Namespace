<?php

namespace Metahuman\NonMutant\Hero;

use Metahuman\NonMutant\NonMutant;

class Hero extends NonMutant {
    protected string $heroTeam;
    protected string $heroWeakness;

    protected function __construct(string $name, int $age, array $powers, string $catchPhrase, string $enhancementType, string $heroTeam, string $heroWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $enhancementType);
        $this->heroTeam = $heroTeam;
        $this->heroWeakness = $heroWeakness;
    }
}
