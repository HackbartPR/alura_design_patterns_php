<?php

namespace HackbartPR;

use HackbartPR\Budget;
use HackbartPR\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax)
    {
        return $tax->calculate($budget);
    }
}