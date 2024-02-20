<?php
require_once "loader.php";
use Metahuman\Mutant\Hero\Hero as MutantHero;
use Metahuman\Mutant\Villain\Villain as MutantVillain;
use Metahuman\NonMutant\Hero\Hero as NonMutantHero;
use Metahuman\NonMutant\Villain\Villain as NonMutantVillain;

$meta1 = new MutantHero("Plastic man", 30, ["elasticity"], "im plastic man", "plastic_blood", "hero team", "hot temperature");
echo $meta1->getCatchPhrase() . " " . $meta1->getTeam() . " " . $meta1->getWeakness();