<?php

namespace HackbartPR\Strategy\Taxes;

use HackbartPR\Budget;

interface Tax
{
    public function calculate(Budget $budget): float;
}