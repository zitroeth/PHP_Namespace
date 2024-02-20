<?php

declare(strict_types=1);

namespace Metahuman\Mutant;

use Metahuman\Metahuman;

abstract class Mutant extends Metahuman {
    protected string $mutationType;

    public function __construct(string $name, int $age, array $powers, string $catchPhrase, string $mutationType) {
        parent::__construct($name, $age, $powers, $catchPhrase);
        $this->mutationType = $mutationType;
    }
}
