<?php

namespace HackbartPR\State\States;

use HackbartPR\State\Budget;
use HackbartPR\State\States\State;

class Approved extends State
{
    const DISCOUNT_PORC = 0.02; 

    public function name(): string
    {
        return "Aprovado";
    }

    public function getExtraDiscount(Budget $budget): float
    {
        return $budget->value * self::DISCOUNT_PORC; 
    }

    public function finalize(Budget $budget): void
    {
        $budget->state = new Finalized();
    }
}