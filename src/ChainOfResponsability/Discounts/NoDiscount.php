<?php

namespace HackbartPR\ChainOfResponsability\Discounts;

use HackbartPR\Budget;
use HackbartPR\ChainOfResponsability\Discounts\Discount;

class NoDiscount extends Discount
{

    public function __construct()
    {}

    public function calculate(Budget $budget): float
    {
        return 0;
    }
}