<?php
namespace Metahuman\Mutant;

declare(strict_types=1);

abstract class Mutant extends Metahuman {
    protected string $mutationType;

    protected function __construct(string $mutationType){
        parent::__construct();
        $this->mutationType = $mutationType;
    }

}