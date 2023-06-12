<?php

namespace HackbartPR\State\States;

use HackbartPR\State\States\State;

class Finalized extends State
{    
    public function name(): string
    {
        return "Finalizado";
    }    
}