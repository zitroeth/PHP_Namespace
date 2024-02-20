<?php

namespace Metahuman\NonMutant\Villain;

use Metahuman\NonMutant\NonMutant;

declare(strict_types=1);

class Villain extends NonMutant {
    protected string $villainTeam;
    protected string $villainWeakness;

    protected function __construct(string $name, int $age, array $powers, string $catchPhrase, string $enhancementType, $villainTeam, $villainWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $enhancementType);
        $this->villainTeam = $villainTeam;
        $this->villainWeakness = $villainWeakness;
    }
}
