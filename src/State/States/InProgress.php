<?php

namespace HackbartPR\State\States;

use HackbartPR\State\Budget;
use HackbartPR\State\States\State;

class InProgress extends State
{
    const DISCOUNT_PORC = 0.05; 

    public function name(): string
    {
        return "Em aprovação";
    }

    public function getExtraDiscount(Budget $budget): float
    {
        return $budget->value * self::DISCOUNT_PORC; 
    }

    public function approve(Budget $budget): void
    {
        $budget->state = new Approved();
    }

    public function disapprove(Budget $budget): void
    {
        $budget->state = new Disapproved();
    }
}