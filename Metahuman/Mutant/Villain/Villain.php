<?php

namespace Metahuman\Mutant\Villain;

use Metahuman\Mutant\Mutant;

declare(strict_types=1);

class Villain extends Mutant {
    protected string $villainTeam;
    protected string $villainWeakness;

    protected function __construct(string $name, int $age, array $powers, string $catchPhrase, string $mutationType, string $villainTeam, string $villainWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $mutationType);
        $this->villainTeam = $villainTeam;
        $this->villainWeakness = $villainWeakness;
    }
}
