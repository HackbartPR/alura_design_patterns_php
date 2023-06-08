<?php

namespace HackbartPR\Strategy\Taxes;

use HackbartPR\Budget;
use HackbartPR\Strategy\Taxes\Tax;

class Iss implements Tax
{
    const ISS_PORC = 0.06;

    public function calculate(Budget $budget): float
    {
        return $budget->value * self::ISS_PORC;
    }
}