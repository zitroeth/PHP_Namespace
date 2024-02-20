<?php

namespace Metahuman\NonMutant;

use Metahuman\Metahuman;

declare(strict_types=1);

abstract class NonMutant extends Metahuman {
    protected string $enhancementType;

    protected function __construct(string $name, int $age, array $powers, string $catchPhrase, string $enhancementType) {
        parent::__construct($name, $age, $powers, $catchPhrase);
        $this->enhancementType = $enhancementType;
    }
}
