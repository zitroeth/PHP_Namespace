<?php

declare(strict_types=1);

namespace Metahuman\NonMutant\Hero;

use Metahuman\NonMutant\NonMutant;

class Hero extends NonMutant {
    protected string $heroTeam;
    protected string $heroWeakness;

    public function __construct(string $name, int $age, array $powers, string $catchPhrase, string $enhancementType, string $heroTeam, string $heroWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $enhancementType);
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
