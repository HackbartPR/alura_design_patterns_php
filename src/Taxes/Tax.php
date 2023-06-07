<?php

namespace HackbartPR\Taxes;

use HackbartPR\Budget;

interface Tax
{
    public function calculate(Budget $budget): float;
}