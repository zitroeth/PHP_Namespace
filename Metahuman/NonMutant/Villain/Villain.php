<?php

declare(strict_types=1);

namespace Metahuman\NonMutant\Villain;

use Metahuman\NonMutant\NonMutant;

class Villain extends NonMutant {
    protected string $villainTeam;
    protected string $villainWeakness;

    public function __construct(string $name, int $age, array $powers, string $catchPhrase, string $enhancementType, $villainTeam, $villainWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $enhancementType);
        $this->villainTeam = $villainTeam;
        $this->villainWeakness = $villainWeakness;
    }
    
    public function getTeam() {
        return $this->villainTeam;
    }

    public function getWeakness() {
        return $this->villainWeakness;
    }
}
