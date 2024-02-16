<?php
namespace Metahuman\NonMutant;

declare(strict_types=1);

abstract class NonMutant extends Metahuman {
    protected string $enhancementType;

    protected function __construct(string $enhancementType){
        parent::__construct();
        $this->enhancementType = $enhancementType;
    }

}