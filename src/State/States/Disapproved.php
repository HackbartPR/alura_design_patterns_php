<?php

namespace HackbartPR\State\States;

use HackbartPR\State\Budget;
use HackbartPR\State\States\State;

class Disapproved extends State
{    
    public function name(): string
    {
        return "Reprovado";
    }

    public function finalize(Budget $budget): void
    {
        $budget->state = new Finalized();
    }
}