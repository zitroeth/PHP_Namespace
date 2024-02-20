<?php

declare(strict_types=1);

namespace Metahuman\Mutant\Villain;

use Metahuman\Mutant\Mutant;

class Villain extends Mutant {
    protected string $villainTeam;
    protected string $villainWeakness;

    public function __construct(string $name, int $age, array $powers, string $catchPhrase, string $mutationType, string $villainTeam, string $villainWeakness) {
        parent::__construct($name, $age, $powers, $catchPhrase, $mutationType);
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
