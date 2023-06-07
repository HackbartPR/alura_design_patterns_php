<?php

namespace HackbartPR\Taxes;

use HackbartPR\Budget;
use HackbartPR\Taxes\Tax;

class Icms implements Tax
{
    const ICMS_PORC = 0.1;

    public function calculate(Budget $budget): float
    {
        return $budget->value * self::ICMS_PORC;
    }
}