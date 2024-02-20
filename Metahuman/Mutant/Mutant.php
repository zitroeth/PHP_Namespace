<?php

namespace Metahuman\Mutant;

use Metahuman\Metahuman;

declare(strict_types=1);

abstract class Mutant extends Metahuman {
    protected string $mutationType;

    protected function __construct(string $name, int $age, array $powers, string $catchPhrase, string $mutationType) {
        parent::__construct($name, $age, $powers, $catchPhrase);
        $this->mutationType = $mutationType;
    }
}
