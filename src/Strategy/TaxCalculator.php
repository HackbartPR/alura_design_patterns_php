<?php

namespace HackbartPR\Strategy;

use HackbartPR\Budget;
use HackbartPR\Strategy\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax)
    {
        return $tax->calculate($budget);
    }
}