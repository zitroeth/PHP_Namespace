<?php

declare(strict_types=1);

namespace Metahuman\NonMutant;

use Metahuman\Metahuman;

abstract class NonMutant extends Metahuman {
    protected string $enhancementType;

    public function __construct(string $name, int $age, array $powers, string $catchPhrase, string $enhancementType) {
        parent::__construct($name, $age, $powers, $catchPhrase);
        $this->enhancementType = $enhancementType;
    }
}
